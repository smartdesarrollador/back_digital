<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medio;
use App\Models\TipoMedio;

class FileController extends Controller
{
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
        }
        if ($post->save()) {
            return ['status' => true, 'message' => 'Post Saved Successfully'];
        } else {
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }
    }
}
