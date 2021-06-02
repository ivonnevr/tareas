<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <h1>Crear nueva tareas</h1>

    <!-- Forma 1 de poner la ruta en el form action
    <form action="/tarea" method="POST">
    -->

    <!-- Forma 2 de poner la ruta en el form action 
    Como estamos en la vista, al llamar al controlador se debe poner toda la ruta
    <form action="{{ action([App\Http\Controllers\TareaController::class, 'store']) }}" method="POST">
    -->

    <!-- Forma 3 de poner la ruta en el form action -->
    <form action="{{ route('tarea.store') }}" method="POST">

        <!-- csrf protege el formulario de inyección de datos -->
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo">
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
        <br>

        <label for="prioridad">Prioridad:</label>
        <input type="number" name="prioridad" step="1" min="0">
        <br>

        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo">
            <option value="Escuela">Escuela</option>
            <option value="Trabajo">Trabajo</option>
            <option value="Personal">Personal</option>
        </select>
        <br>

        <label for="fecha_limite">Fecha límite:</label>
        <input type="date" name="fecha_limite">
        <br>

        <input type="submit" value="Crear">

    </form>
    
</body>
</html>