<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><a href="{{ route('verEquipos') }}">Lista de Equipos Registrados</a></li>
        <li><a href="{{ route('verEquiposJugadores') }}">Lista de Jugadores Por Equipo</a></li>
        <li><a href="{{ route('formAltaJugador') }}">Dar de Alta un Jugador</a></li>
        <li><a href="{{ route('formEquipo') }}">Dar de Alta un Equipo</a></li>
    </ul>
</body>

</html>