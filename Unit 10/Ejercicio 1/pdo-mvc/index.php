<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>                 
    <form action="./main.php" method="POST" enctype="multipart/form-data">
        <legend>Nuevo Estudiante</legend>
        <label for="">Nombre:</label> <br>
        <input type="text" name="" id="nombre"> <br> <br>
        <label for="">Apellidos:</label> <br>
        <input type="text" name="" id="apellidos"> <br> <br>
        <label for="">Email:</label> <br>
        <input type="email" name="" id="email"> <br> <br>
        <label for="">Telefono:</label> <br>
        <input type="number" name="" id="telefono"> <br> <br>
        <label for="">Tutor:</label> <br>
        <input type="text" name="" id="tutor"> <br> <br>
        <label for="">Grupo:</label> <br>
        <input type="text" name="" id="grupo"> <br> <br>
        <label for="">Fecha de Inicio:</label> <br>
        <input type="datetime" name="" id="fecha"> <br> <br>
        <label for="">ID Estudiante:</label>
        <input type="number" name="" id="id">
    </form>

    <br>

    <button onclick="">Mostrar Base de Datos</button>

    <?php include('main.php') ?>
</body>
</html>