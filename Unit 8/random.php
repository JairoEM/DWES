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
        $number = $_POST["number"];
        $count = 0;
        $random = rand(1, 100);
        echo 'console.log('.$random.')';

        function tryNumber($number, $random){
            echo 'console.log('.$random.')';
            while($random != $number){
                if($number < $random){
                    $count++;
                    echo "Try a smaller number.";
                }else{
                    if($number > $random){
                        $count++;
                        echo "Try a bigger number.";
                    }else{
                        if($number == $random){
                            echo "Congratulations, you have succeeded in $count tries.";
                        }
                    }
                }
            } 
        }
    ?>
    
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="number">Choice a number: </label> <input type="number" name="number" id="">
        <input type="submit" value="Send" onclick="tryNumber()">
    </form>

</body>
</html>