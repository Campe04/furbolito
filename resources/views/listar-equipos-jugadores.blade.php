<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
</head>
<body>
    <h1>Equipos Registrados:</h1>
    <p>Clica sobre el enlace 'Plantilla' del equipo que desees para ver los jugadores de su plantilla</p>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Numero de Socios</th>
            <th>Jugadores del Equipo</th>
        </tr>
        @foreach ($equipos as $equipo)
        <tr>
            <td>{{ $equipo->nombre }}</td>
            <td>{{ $equipo->num_socios }}</td>
            <td><a href="{{ route('verJugadores',$equipo->id) }}">Plantilla</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>