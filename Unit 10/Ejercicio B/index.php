<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EJERCICIO B</title>
</head>
<body>
    <table>
    <?php
        $usuario = "root";
        $contrasena = "";
        $servidor = "localhost";
        $basededatos = "librovisitas";
        
        $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die ("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db($conexion, $basededatos) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $consulta = "SELECT Nombre, Apellidos FROM comentarios";

        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $comentarios = $_POST["comentario"];

        $insert = "INSERT INTO comentarios VALUES ($nombre, $apellidos, $comentarios)";
        $resultadoInsert = mysqli_query($conexion, $insert) or die ( "Algo ha ido mal en el insert a la base de datos");

        $consulta = "SELECT * FROM comentarios ORDER BY Nombre ASC";
        $resultadoConsulta = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");

        while($mostrar = mysqli_fetch_array($resultadoConsulta)){
            ?>  
                <tr>
                    <td><?php echo $mostrar['Nombre'] ?></td>
                    <td><?php echo $mostrar['Apellidos'] ?></td>
                    <td><?php echo $mostrar['Comentario'] ?></td>
                </tr> 
            <?php
        }
        mysqli_close($conexion);
    ?>
    </table>

    <form action="#" method="POST" enctype="multipart/form-data">
        <legend>Nuevo Estudiante</legend>
        <label for="">Nombre:</label> <br>
        <input type="text" name="" id="nombre"> <br> <br>
        <label for="">Apellidos:</label> <br>
        <input type="text" name="" id="apellidos"> <br> <br>
        <label for="">Comentarios:</label>
        <textarea name="" id="comentario" cols="30" rows="10"></textarea> <br> <br>
        <input type="submit" value="Insertar Valores">
    </form>
</body>
</html>