<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobación</title>
</head>

<body>
    @if ($obj === "Equipo")
        @if ($msg === 'Equipo creado correctamente')
            <h1>El equipo se registró exitosamente</h1>
        @else
            <h1>Fallo al registrar el equipo</h1>
        @endif
        <a href="{{ route('verEquipos') }}">Ver equipos</a>
        <a href="{{ route('formEquipo') }}">Alta Equipo</a>
        <a href="{{ route('inicio') }}">Volver al Inicio</a>
    @endif

    @if ($obj === "Jugador")
        @if ($msg === 'Jugador creado correctamente')
            <h1>El Jugador se registró exitosamente</h1>
        @else
            <h1>Fallo al registrar el Jugador</h1>
        @endif

        <a href="{{ route('verJugadores', ['id_equipo' => $equipo_id]) }}">Ver Jugadores del Equipo al que añadiste el Jugador</a>
        <a href="{{ route('formAltaJugador') }}">Alta Jugador</a>
        <a href="{{ route('inicio') }}">Volver al Inicio</a>
    @endif

    @if ($obj === "Torneo")
        @if ($msg === 'Torneo creado correctamente')
            <h1>El Torneo se registró exitosamente</h1>
        @else
            <h1>Fallo al registrar el Torneo</h1>
        @endif
        <a href="{{ route('verTorneos') }}">Ver Torneos</a>
        <a href="{{ route('formTorneo') }}">Alta Torneos</a>
        <a href="{{ route('inicio') }}">Volver al Inicio</a>
    @endif
</body>

</html>
