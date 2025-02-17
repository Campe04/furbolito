<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Torneo</title>
</head>

<body>
<form action="{{ route('altaTorneo') }}" method="get">
    <label for="nombre">Nombre del Torneo</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="nacional">¿Es un torneo nacional?</label>
    <input type="checkbox" name="nacional" id="nacional" value="1">

    <input type="submit" value="Dar de Alta">
</form>

</body>

</html>