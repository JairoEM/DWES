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
        $text = $_POST["textArea"];

        $visitBook = "./visitbook.txt";

        $save = fopen($visitBook, "a");
        fwrite($save,"New Guest:\r\n".$text."\r\n");
        fclose($save);
    ?>

    <form action="#" method="POST" enctype="multipart/form-data">
        <textarea name="textArea" id="" cols="30" rows="10">That is the visit book, write how was your time here :)</textarea>
        <input type="submit" value="Send">
    </form>

</body>
</html>