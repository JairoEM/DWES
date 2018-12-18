<?php
    require("object.php");

    $dbhost = 'localhost';
    $dbname = 'librovisitas';
    $dbusername = 'root';
    $dbpassword = '';

    $my_Db_Connection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    $my_Select_Statement = $my_Db_Connection->prepare("SELECT * FROM comentario ORDER BY Nombre ASC");
    $my_Select_Statement->execute();
    $estudiantes = $my_Select_Statement->fetchAll();

    echo "<table>";
        echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Apellidos</td>";
            echo "<td>Comentario</td>";
        echo "</tr>";

        foreach($estudiantes as $estudiante){
            echo "<tr>";
                echo "<td>".$estudiante['Nombre']."</td>";
                echo "<td>".$estudiante['Apellidos']."</td>";
                echo "<td>".$estudiante['Comentario']."</td>";
            echo "</tr>";
        }
    echo "<table>";

    $my_Db_Connection = null;

    session_start();
    $idSesion = session_id();
    $idNombre = session_name();
    if (!isset($_SESSION['Root'])) {
        $_SESSION['Root'] = 0;      
        echo "<span>$idSesion $idNombre sesion iniciada</span>";
        
    } else {
        $_SESSION['Root']++;
        echo "<span>$idSesion $idNombre sesion iniciada</span>";
    }
?>