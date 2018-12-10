<?php
    require 'object.php';

    function insertOnTable(){
        $conexion = new conexion("localhost", "instituto", "root", "");
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
        $my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO estudiante (Nombre, Apellidos, Email, Telefono, Tutor, Grupo, FechaDeInicio, IdEstudiante) 
            VALUES (:Nombre, :Apellidos, :Email, :Telefono, :Tutor, :Grupo, :FechaDeInicio, :IdEstudiante)");

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

        $my_Db_Connection = null;
    }

    function showTable(){
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

        $my_Select_Statement = $my_Db_Connection->prepare("SELECT * FROM estudiante ORDER BY Apellidos ASC");
        $my_Select_Statement->execute();
        $estudiantes = $my_Select_Statement->fetchAll();

        echo "<table>";
            echo "<tr>";
                echo "<td>Nombre</td>";
                echo "<td>Apellidos</td>";
                echo "<td>Email</td>";
                echo "<td>Telefono</td>";
                echo "<td>Tutor</td>";
                echo "<td>Grupo</td>";
                echo "<td>Fecha de Inicio</td>";
                echo "<td>ID Estudiante</td>";
            echo "</tr>";

            foreach($estudiantes as $estudiante){
                echo "<tr>";
                    echo "<td>".$estudiante['Nombre']."</td>";
                    echo "<td>".$estudiante['Apellidos']."</td>";
                    echo "<td>".$estudiante['Email']."</td>";
                    echo "<td>".$estudiante['Telefono']."</td>";
                    echo "<td>".$estudiante['Tutor']."</td>";
                    echo "<td>".$estudiante['Grupo']."</td>";
                    echo "<td>".$estudiante['FechaDeInicio']."</td>";
                    echo "<td>".$estudiante['IdEstudiante']."</td>";
                echo "</tr>";
            }
        echo "<table>";

        $my_Db_Connection = null;
    }
?>