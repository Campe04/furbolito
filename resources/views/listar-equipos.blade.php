<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
</head>
<body>
    <h1>Equipos Registrados:</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Numero de Socios</th>
        </tr>
        @foreach ($equipos as $equipo)
        <tr>
            <td>{{ $equipo->nombre }}</td>
            <td>{{ $equipo->num_socios }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>