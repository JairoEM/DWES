<?php
    include 'object.php';

    $conexion = new conexion("localhost", "estudiante", "root", "");
    $servername = $conexion.getServername();
    $username = $conexion.getUsername();
    $password = $conexion.getPassword();
    $database = $conexion.getDatabase();
    $sql = "mysql:host=$servername;dbname=$database;";
    $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    // Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
    try { 
    $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
        echo "Connected successfully";
    } catch (PDOException $error) {
        echo 'Connection error: ' . $error->getMessage();
    }

    // Set the variables for the person we want to add to the database
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $tutor = $_POST["tutor"];
    $grupo = $_POST["grupo"];
    $fecha = $_POST["fecha"];
    $id = $_POST["id"];
    
    // Here we create a variable that calls the prepare() method of the database object
    // The SQL query you want to run is entered as the parameter, and placeholders are written like this :placeholder_name
    $my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO Students (Nombre, Apellidos, Email, Telefono, Tutor, Grupo, FechaDeInicio, IdEstudiante) 
        VALUES (:nombre, :apellidos, :email, :telefono, :tutor, :grupo, :fecha, :id)");

    // Now we tell the script which variable each placeholder actually refers to using the bindParam() method
    // First parameter is the placeholder in the statement above - the second parameter is a variable that it should refer to
    $my_Insert_Statement->bindParam(:nombre, $nombre);
    $my_Insert_Statement->bindParam(:apellidos, $apellidos);
    $my_Insert_Statement->bindParam(:email, $email);
    $my_Insert_Statement->bindParam(:telefono, $telefono);
    $my_Insert_Statement->bindParam(:tutor, $tutor);
    $my_Insert_Statement->bindParam(:grupo, $grupo);
    $my_Insert_Statement->bindParam(:fecha, $fecha);
    $my_Insert_Statement->bindParam(:id, $id);

    // Execute the query using the data we just defined
    // The execute() method returns TRUE if it is successful and FALSE if it is not, allowing you to write your own messages here
    if ($my_Insert_Statement->execute()) {
        echo "New record created successfully";
    } else {
        echo "Unable to create record";
    }
?>