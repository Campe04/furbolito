<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Torneo por Año</title>
</head>
<body>
    <form action="{{ route('selectTorneoAnho') }}" method="GET">
        <label for="torneo">Torneos:</label>
        <select name="torneo" id="torneo">
            @foreach ($torneos as $torneo)
            <option value="{{ $torneo->nombre }}">{{ $torneo->nombre }}</option>
            @endforeach
        </select>

        <label for="anho">Año:</label>
        <select name="anho" id="anho">
            @php
                $currentYear = date("Y");
                for ($year = 1958; $year <= $currentYear; $year++) {
                    $selected = ($year == $currentYear) ? 'selected' : '';
                    echo "<option value='$year' $selected>$year</option>";
                }
            @endphp
        </select>

        <button type="submit">Mostrar</button>
    </form>
</body>
</html>
