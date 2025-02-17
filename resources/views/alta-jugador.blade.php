<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Jugador</title>
</head>

<body>
    <h2>Dar de Alta un Jugador</h2>

    <form action="{{ route('altaJugador') }}" method="post">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Jugador 1..." required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <label for="dorsal">Dorsal:</label>
        <input type="number" name="dorsal" id="dorsal" min="1" max="99" value="12" required>

        <label for="f_naci">Fecha de Nacimiento:</label>
        <input type="date" name="f_naci" id="f_naci" value="{{ date('Y-m-d') }}" required>

        <label for="equipo_id">Equipo:</label>
        <select name="equipo_id" id="equipo_id" required>
            <option value="" disabled selected>Selecciona un equipo</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar</button>
    </form>

</body>

</html>
