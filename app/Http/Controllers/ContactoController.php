<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Mail\ContactoEmail;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
     public function sendContactForm(Request $request)
    {
        $data['nombre'] = $request->nombre;

$nombre = $data['nombre'];


    /* Mail::send('contacto', $data, function ($message) use ($data) {
      $message->to('prueba@iatecdigital.com', $data['nombre'])
      ->subject("Titulo del Mensaje");
    });

$data = [
        'nombre' => $request->input('nombre'),
        'correo' => $request->input('correo'),
        'mensaje' => $request->input('mensaje'),
    ]; */

    $email = new ContactoEmail($nombre);

    Mail::to('jeans@enfocussoluciones.com')->send($email);



    return response()->json([
      'Success' => 'Excelente email enviado..',
      'code' => '200',
    ],200);


    }
}
