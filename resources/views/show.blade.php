<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Correo Electronico</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user-> email }}</th>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>