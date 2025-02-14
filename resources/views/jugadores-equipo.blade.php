<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Los Jugadores de {{ $equipo->nombre}} son: </h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Dorsal</th>
            <th>Fecha Nacimiento</th>
        </tr>
        @foreach ($jugadores as $jugador)
        <tr>
            <td>{{ $jugador->nombre }}</td>
            <td>{{ $jugador->apellidos }}</td>
            <td>{{ $jugador->dorsal }}</td>
            <td>{{ $jugador->f_naci }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>