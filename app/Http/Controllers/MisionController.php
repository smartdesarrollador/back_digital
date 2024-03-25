<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mision;
use Illuminate\Http\Response;



class MisionController extends Controller
{
    public function index(){
        $categories=Mision::find(1);
        return response()->json($categories,Response::HTTP_OK);
    }
}
