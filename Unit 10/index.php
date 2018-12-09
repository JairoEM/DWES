<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
    <?php
        // Ejercicio 1
        
        $usuario = "root";
        $contrasena = "tu_contraseña";
        $servidor = "localhost";
        $basededatos = "estudiante";
        
        
        // Ejercicio 2
        
        // Base de datos "estudiante" creada con phpMyAdmin
        
        // Ejercicio 3
        
        $conexion = mysqli_connect($servidor, $usuario, "");
        $db = mysqli_select_db($conexion, $basededatos);
        
        // Ejercicio 5
        
        $consulta = "SELECT Nombre, Apellidos FROM estudiante";
    ?>
                
    <form action="#" method="POST" enctype="multipart/form-data">
        <legend>Nuevo Estudiante</legend>
        <label for="">Nombre:</label> <br>
        <input type="text" name="" id=""> <br> <br>
        <label for="">Apellidos:</label> <br>
        <input type="text" name="" id=""> <br> <br>
        <label for="">Email:</label> <br>
        <input type="email" name="" id=""> <br> <br>
        <label for="">Telefono:</label> <br>
        <input type="number" name="" id=""> <br> <br>
        <label for="">Tutor:</label> <br>
        <input type="text" name="" id=""> <br> <br>
        <label for="">Grupo:</label> <br>
        <input type="text" name="" id=""> <br> <br>
        <label for="">Fecha de Inicio:</label> <br>
        <input type="datetime" name="" id=""> <br> <br>
        <label for="">ID Estudiante:</label>
        <input type="number" name="" id="">
    </form>

    <br>

    <button onclick="">Mostrar Base de Datos</button>

    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Email</td>
            <td>Telefono</td>
            <td>Tutor</td>
            <td>Grupo</td>
            <td>Fecha de Inicio</td>
            <td>ID Estudiante</td>
        </tr>

        <?php
            // Ejercicio 6
        
            $consultaApellidos = "SELECT * FROM estudiante ORDER BY Apellidos ASC";
            $resultado = mysqli_query($conexion, $consultaApellidos);

            while($mostrar = mysqli_fetch_array($resultado)){
                ?>
                    <tr>
                        <td><?php echo $mostrar['Nombre'] ?></td>
                        <td><?php echo $mostrar['Apellidos'] ?></td>
                        <td><?php echo $mostrar['Email'] ?></td>
                        <td><?php echo $mostrar['Telefono'] ?></td>
                        <td><?php echo $mostrar['Tutor'] ?></td>
                        <td><?php echo $mostrar['Grupo'] ?></td>
                        <td><?php echo $mostrar['Fecha de Inicio'] ?></td>
                        <td><?php echo $mostrar['ID Estudiante'] ?></td>
                    </tr>
                
                <?php
            }
        ?>
    </table>
</body>
</html>