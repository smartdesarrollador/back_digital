<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Mail\TestContact;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
     public function sendContactForm(Request $request)
    {
        $data['nombre'] = $request->nombre;


    Mail::send('contacto', $data, function ($message) use ($data) {
      $message->to('obed@manatums.com', $data['nombre'])
      ->subject("Titulo del Mensaje");
    });
    return response()->json([
      'Success' => 'Excelente email enviado..',
      'code' => '200',
    ],200);


    }
}
