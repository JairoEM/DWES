<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Form</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="">Username: </label> <input type="text" name="username" id=""> <br>
        <label for="">Password: </label> <input type="password" name="password" id=""> <br>
        <label for="">Email: </label> <input type="email" name="email" id=""> <br>
        <input type="submit" value="Send" name="send">
        <input type="reset" value="Clear">
    </form>

    <?php

        $usersArray = [];

        function newUser($username, $password, $email){
            $usersArray[$username] = [
                "Password" => $password,
                "Email" => $email
            ];

            return $usersArray;
        }

        if(isset($_POST["send"])){
            $user = $_POST["username"];
            $pass = $_POST["password"]; 
            $mail = $_POST["email"];

            newUser($user, $pass, $mail);
        }

    ?>
</body>
</html>