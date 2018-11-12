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
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $phone = $_POST["phone"];

        $phonebook = "./phonebook.txt";

        $save = fopen($phonebook, "a");
        fwrite($save,"Nombre: ".$name."\r\nSurname: ".$surname."\r\nPhone: ".$phone."\r\n");
        fclose($save);

        $handle = fopen($phonebook, "r");
        $linecount = 0;
        while(!feof($handle)){
            $line = fgets($handle);
            $linecount++;
        }
        fclose($handle);

        echo "Our file have a size of ".filesize($phonebook)." KBs.<br>";
        echo "Our file have ".$linecount.", lines.<br>";
    ?>
    
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="name">Name: </label> <input type="text" name="name" id="">
        <label for="surname">Surname: </label> <input type="text" name="surname" id="">
        <label for="phone">Phone: </label> <input type="number" name="phone" id="">
        <input type="submit" value="Send">
    </form>

</body>
</html>