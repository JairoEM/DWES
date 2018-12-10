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
        $contrasena = "";
        $servidor = "localhost";
        $basededatos = "estudiante";
        
        // Ejercicio 2
        
        // Base de datos "estudiante" creada con phpMyAdmin
        
        // Ejercicio 3
        
        $conexion = mysqli_connect($servidor, $usuario, "") or die ("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db($conexion, $basededatos) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    
        // Ejercicio 5
        
        $consulta = "SELECT Nombre, Apellidos FROM estudiante";

        // Ejercicio 4

        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $tutor = $_POST["tutor"];
        $grupo = $_POST["grupo"];
        $fecha = $_POST["fecha"];
        $id = $_POST["id"];

        $sql = "INSERT INTO Students (Nombre, Apellidos, Email, Telefono, Tutor, Grupo, FechaDeInicio, IdEstudiante) 
            VALUES ($nombre, $apellidos, $email, $telefono, $tutor, $grupo, $fecha, $id)";
    ?>
                
    <form action="#" method="POST" enctype="multipart/form-data">
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
            $usuario = "root";
            $contrasena = "";
            $servidor = "localhost";
            $basededatos = "estudiante";



            $consultaApellidos = "SELECT * FROM estudiante ORDER BY Apellidos ASC";
            $resultado = mysqli_query($conexion, $consultaApellidos) or die ( "Algo ha ido mal en la consulta a la base de datos");

            $conexion = mysqli_connect($servidor, $usuario, "") or die ("No se ha podido conectar al servidor de Base de datos");
            $db = mysqli_select_db($conexion, $basededatos) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

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
            mysqli_close($conexion);
        ?>
    </table>
</body>
</html>