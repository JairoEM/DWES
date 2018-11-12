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
        $directory = "./";
        $count = 0;

        if(is_dir($directory)){
            $od = opendir($directory);

            while(($file = readdir($od)) == true){
                $count++;
                echo "File ".$count.": ".$file." <br>";
            }

            closedir($od);
        }
    ?>

</body>
</html>