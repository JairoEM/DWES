<?php
    require("object.php");

    $dbhost = 'localhost';
    $dbname = 'librovisitas';
    $dbusername = 'root';
    $dbpassword = '';

    $my_Db_Connection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    // Set the variables for the person we want to add to the database
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $comentario = $_POST["comentario"];
    
    // Here we create a variable that calls the prepare() method of the database object
    // The SQL query you want to run is entered as the parameter, and placeholders are written like this :placeholder_name
    $my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO comentario  
        VALUES (:nombre, :apellidos, :comentario)");

    // Now we tell the script which variable each placeholder actually refers to using the bindParam() method
    // First parameter is the placeholder in the statement above - the second parameter is a variable that it should refer to
    $my_Insert_Statement->bindParam(nombre, $nombre);
    $my_Insert_Statement->bindParam(apellidos, $apellidos);
    $my_Insert_Statement->bindParam(comentario, $comentario);


    // Execute the query using the data we just defined
    // The execute() method returns TRUE if it is successful and FALSE if it is not, allowing you to write your own messages here
    if ($my_Insert_Statement->execute()) {
        echo "New record created successfully";
    } else {
        echo "Unable to create record";
    }

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