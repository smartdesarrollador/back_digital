<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Accion;

use Illuminate\Http\Response;


class AccionController extends Controller
{
     public function index()
    {
        //
        return Accion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TestApi $testApi)
    {
        //
        return $testApi;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TestApi $testApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestApi $testApi)
    {
        //
    }
}
