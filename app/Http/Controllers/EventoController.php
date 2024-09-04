<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evento;
use App\Http\Requests\EventoRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    private $urlAssets;
    private $urlAssetsProd;

    public function __construct()
    {
        $this->urlAssets = 'assets/imagen/evento';
        $this->urlAssetsProd = config('myconfig.url_upload_evento');
        /* $this->urlAssetsProd = '/home1/iatecdigital/back.iatecdigital.com/assets/imagen/carousel'; */
    }

   public function index()
    {
        $evento = Evento::all();
        return response()->json($evento, Response::HTTP_OK);
    }

    public function store(EventoRequest $request)
    {
        $evento=Evento::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$evento
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $evento = Evento::find($id);

        if (!$evento) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($evento, 200);
    }

    public function update(EventoRequest $request,$id){
        $id=Evento::find($id);
        $id->update($request->only('titulo','fecha','codigo','imagen','ruta_imagen'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'id'=>$id
        ],Response::HTTP_CREATED);
    }

    public function destroy($id){
        $id=Evento::find($id);
        $id->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

     public function file(Request $request)
    {
        $evento= new Evento();

        if ($request->hasFile('imagen')) {

            $titulo = $request->input('titulo');
            $fecha = $request->input('fecha');
            $codigo = $request->input('codigo');
            
            $completeFileName = $request->file('imagen')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagen')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
           $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
           //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);

            $evento->titulo = $titulo;
            $evento->fecha = $fecha;
            $evento->codigo = $codigo;
            $evento->imagen = $compPic;
            $evento->ruta_imagen = $this->urlAssets.'/'.$compPic; 
            /* $evento->maestro = $maestro; */
        }
        if ($evento->save()) {
            return ['status' => true, 'message' => 'Datos guardados con exito'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

     public function updateFile(Request $request)
{
    $id = $request->input('id_evento');
    $titulo = $request->input('titulo');
    $fecha = $request->input('fecha');
    $codigo = $request->input('codigo');

    $evento = Evento::find($id);

    if (!$evento) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('imagen')) {
        $completeFileName = $request->file('imagen')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        
         $path = $request->file('imagen')->move($this->urlAssetsProd, $compPic);
         //$path = $request->file('imagen')->move(public_path($this->urlAssets), $compPic);
 
        if ($evento->imagen) {
            $this->deleteFile($evento->imagen);
        }

        $evento->titulo = $titulo;
        $evento->fecha = $fecha;
        $evento->codigo = $codigo;
        $evento->imagen = $compPic;
        $evento->ruta_imagen = $this->urlAssets.'/'.$compPic;
        /* $evento->maestro = $maestro; */

    }else{
         $evento->titulo = $titulo;
         $evento->fecha = $fecha;
        $evento->codigo = $codigo;
    }

    if ($evento->save()) {
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
        $evento=Evento::find($id);
        $this->deleteFile($evento->imagen);
        $evento->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
}
