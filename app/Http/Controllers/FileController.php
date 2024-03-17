<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

use App\Models\Medio;
use App\Models\TipoMedio;

class FileController extends Controller
{
    public function index(){
        $medios=Medio::all();
        return response()->json($medios,Response::HTTP_OK);
    }

    public function file(Request $request)
    {
        $post = new Medio();

        if ($request->hasFile('nombre')) {
            $completeFileName = $request->file('nombre')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('nombre')->getClientOriginalExtension();
            $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extenshion;
            /* $path = $request->file('nombre')->storeAs('public/posts', $compPic); */
           
            /* $post->url = "storage/posts/".$compPic; */

        // Cambia la ruta de almacenamiento a la carpeta public
        $path = $request->file('nombre')->move(public_path('posts'), $compPic);

        $post->nombre = $compPic;
        $post->url = "posts/".$compPic; // La URL ahora será relativa a la carpeta public
        }
        if ($post->save()) {
            return ['status' => true, 'message' => 'Post Saved Successfully'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

    public function updateFile(Request $request)
{
    $id = $request->input('id_medios');
    $post = Medio::find($id);

    if (!$post) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('nombre')) {
        $completeFileName = $request->file('nombre')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('nombre')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        /* $path = $request->file('nombre')->storeAs('public/posts', $compPic); */

         $path = $request->file('nombre')->move(public_path('posts'), $compPic);

        
        

        // Eliminar la imagen anterior si existe
        if ($post->nombre) {
            /* Storage::delete('public/posts/' . $post->nombre); */
            $this->deleteFile($post->nombre);
        }

        $post->nombre = $compPic;
        /* $post->url = "storage/posts/".$compPic; */
        $post->url = "posts/".$compPic;

       

    }

    

    if ($post->save()) {
        return ['status' => true, 'message' => 'Post Updated Successfully '];
    } else {
        return ['status' => false, 'message' => 'Something Went Wrong'];
    }
}

 public function destroy($category){
        $category=Medio::find($category);
        $this->deleteFile($category->nombre);
        $category->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

    public function deleteFile($fileName)
{
    // Construye la ruta completa del archivo en la carpeta public
    $filePath = public_path('posts/' . $fileName);

    // Verifica si el archivo existe antes de intentar eliminarlo
    if (file_exists($filePath)) {
        // Intenta eliminar el archivo
        if (unlink($filePath)) {
            return true; // Retorna true si el archivo se eliminó correctamente
        } else {
            return false; // Retorna false si hubo algún error al eliminar el archivo
        }
    } else {
        return true; // Retorna true si el archivo no existe (considerado como eliminado)
    }
}

}
