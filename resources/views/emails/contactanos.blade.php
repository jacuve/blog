<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{color: blue;}
    </style>
</head>
<body>
    <h1>Correo electrónico</h1>
    <p>Este es el primero correo por laravel</p>

    <p>Nombre:<strong>{{$contacto['name']}}</strong></p>
    <p>Correo:<strong>{{$contacto['correo']}}</strong></p>
    <p>Mensaje:<strong>{{$contacto['mensaje']}}</strong></p>
</body>
</html>