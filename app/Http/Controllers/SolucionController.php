<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Solucion;
use App\Http\Requests\SolucionRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SolucionController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/solucion';
        $this->urlAssetsProd = config('myconfig.url_upload_solucion');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/carousel'; */
    }

   public function index()
    {
        $solucion = Solucion::all();
        return response()->json($solucion, Response::HTTP_OK);
    }

    public function store(SolucionRequest $request)
    {
        $solucion=Solucion::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$solucion
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $solucion = Solucion::find($id);

        if (!$solucion) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($solucion, 200);
    }

    public function update(SolucionRequest $request,$id){
        $id=Solucion::find($id);
        $id->update($request->only('titulo','descripcion', 'url' ,'imagen','ruta_imagen'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=Solucion::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $solucion= new Solucion();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $descripcion = $request->input('descripcion');
            $url = $request->input('url');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $solucion->titulo = $titulo;
            $solucion->descripcion = $descripcion;
            $solucion->url = $url;
            $solucion->imagen = $compPic;
            $solucion->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $solucion->maestro = $maestro; */
        }
        if ($solucion->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_solucion');
    $titulo = $request->input('titulo');
    $descripcion = $request->input('descripcion');
    $url = $request->input('url');
    $solucion = Solucion::find($id);

    if (!$solucion) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($solucion->imagen) {
            $this->deleteFile($solucion->imagen);
        }

        $solucion->titulo = $titulo;
        $solucion->descripcion = $descripcion;
        $solucion->url = $url;
        $solucion->imagen = $compPic;
        $solucion->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $solucion->maestro = $maestro; */

    }else{
         $solucion->titulo = $titulo;
        $solucion->descripcion = $descripcion;
        $solucion->url = $url;
    }

    if ($solucion->save()) {
        return ['status' => true, 'message' => 'Datos actualizados con exito'];
    } else {
        return ['status' => false, 'message' => 'Something Went Wrong'];
    }
}

// Eliminar imagen de carpeta de imagenes
    public function deleteFile($fileName)
{
    $filePath = $this->urlAssetsProd . '/' . $fileName;
    //$filePath = public_path($this->urlAssets .'/'. $fileName);

    
    if (file_exists($filePath)) {
        
        if (unlink($filePath)) {
            return true; 
            return false; 
        }
    } else {
        return true; 
    }
}

public function destroyFile($id){
        $solucion=Solucion::find($id);
        $this->deleteFile($solucion->imagen);
        $solucion->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
