<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="Data info">
    </form>   
    <?php
    $file = $_FILES["file"]["name"];
    echo(filesize($file));
    ?>
</body>
</html>