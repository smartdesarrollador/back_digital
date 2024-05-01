<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Nombre: {{ $data['nombre'] }}</p>
<p>Correo electrónico: {{ $data['correo'] }}</p>
<p>Teléfono: {{ $data['telefono'] }}</p><br>
<p>Asunto: <strong>{{ $data['asunto'] }}</strong> </p>
<p>Mensaje: {{ $data['mensaje'] }}</p>
</body>
</html>