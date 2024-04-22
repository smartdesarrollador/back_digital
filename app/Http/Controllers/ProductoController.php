<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Requests\ProductoRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
   public function index()
    {
        $productos = Producto::all();
        return response()->json($productos, Response::HTTP_OK);
    }

    public function store(ProductoRequest $request)
    {
        $productos=Producto::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$productos
        ],Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
         $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($producto, 200);
    }
}
