<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <h1>Listado de tareas</h1>

    <table border = "1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha límite</th>
            </tr>
        </thead>
        <tbody>
            <!-- recorrer todo lo que hay en $tareas renglón por renglón ($tarea) -->
            @foreach ($tareas as $tarea) 
            <!-- al foreach le pasamos la variable $tareas y le asignamos una variable temporal $tarea -->
                <tr>
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->titulo }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->fecha_limite }}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>