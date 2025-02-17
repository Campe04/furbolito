<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Equipo</title>
</head>
<body>
    <form action="{{ route('altaEquipo') }}" method="get">
        <label for="nombre">Nombre del Equipo</label>
        <input type="text" name="nombre" id="nombre">
        <label for="numSocios">Número de Socios</label>
        <input type="text" name="numSocios" id="numSocios">
        <input type="submit" value="Dar de Alta">
    </form>
</body>
</html>