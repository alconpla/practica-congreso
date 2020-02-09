<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Tu cuenta de ponente</title>
</head>
<body>
    <p>Hola, se ha creado su cuenta de ponente {{ $user->created_at }}.</p>
    <p>Estos son sus datos:</p>
    <ul>
        <li>Nombre: {{ $user->name }}</li>
        <li>Contraseña: {{ $user->password }}</li>
    </ul>
</body>
</html>