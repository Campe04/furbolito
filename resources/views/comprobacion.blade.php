<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($obj[0] === "Equipo")
        @if ($msg[0] === true)
        <h1>El equipo se registró exitosamente</h1>
        @else
        <h1>Fallo al registrar el equipo</h1>
        @endif
        <a href="{{ route('verEquipos') }}">Ver equipos</a>
        <a href="{{ route('formEquipo') }}">Alta Equipo</a>
    @endif

    @if ($obj[0] === "Jugador")
        @if ($msg[0] === true)
        <h1>El Jugador se registró exitosamente</h1>
        @else
        <h1>Fallo al registrar el Jugador</h1>
        @endif
        <a href="{{ route('verJugadores') }}">Ver Jugadores</a>
        <a href="{{ route('formJugador') }}">Alta Jugador</a>
    @endif

    @if ($obj[0] === "Torneo")
        @if ($msg[0] === true)
        <h1>El Torneo se registró exitosamente</h1>
        @else
        <h1>Fallo al registrar el Torneo</h1>
        @endif
        <a href="{{ route('verTorneos') }}">Ver Torneos</a>
        <a href="{{ route('formTorneo') }}">Alta Torneos</a>
    @endif
</body>
</html>