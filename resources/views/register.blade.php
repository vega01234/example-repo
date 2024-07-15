<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div>
                <label for="name">Nombre Completo</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Correo Electronico</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Contrasena</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">Guardar Registro</button>
        </form>
    </div>
</body>
</html>