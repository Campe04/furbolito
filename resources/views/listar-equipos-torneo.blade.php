<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos del Torneo: {{ $torneo->nombre }} (Año: {{ $anho }})</title>
</head>
<body>
    <h1>Equipos del Torneo: {{ $torneo->nombre }} (Año: {{ $anho }})</h1>

    @if ($equipos->isEmpty())
        <p>No hay equipos registrados para este torneo en el año {{ $anho }}.</p>
    @else
        <ul>
            @foreach ($equipos as $equipo)
                <li>{{ $equipo->nombre }} (Número de socios: {{ $equipo->num_socios }})</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
