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
            $path = $request->file('nombre')->storeAs('public/posts', $compPic);
            $post->nombre = $compPic;
            $post->url = "storage/posts/".$compPic;
        }
        if ($post->save()) {
            return ['status' => true, 'message' => 'Post Saved Successfully'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }

    public function updateFile(Request $request, $id)
{
    $post = Medio::find($id);

    if (!$post) {
        return ['status' => false, 'message' => 'Post Not Found'];
    }

    if ($request->hasFile('nombre')) {
        $completeFileName = $request->file('nombre')->getClientOriginalName();
        $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
        $extension = $request->file('nombre')->getClientOriginalExtension();
        $compPic = str_replace('', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
        $path = $request->file('nombre')->storeAs('public/posts', $compPic);

        // Eliminar la imagen anterior si existe
        if ($post->nombre) {
            Storage::delete('public/posts/' . $post->nombre);
        }

        $post->nombre = $compPic;
    }

    if ($post->save()) {
        return ['status' => true, 'message' => 'Post Updated Successfully'];
    } else {
        return ['status' => false, 'message' => 'Something Went Wrong'];
    }
}

 public function destroy($category){
        $category=Medio::find($category);
        $category->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

}
