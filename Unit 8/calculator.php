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
        $firstNumber = $_POST["fNumber"];
        $operation = $_POST["operation"];
        $secondNumber = $_POST["sNumber"];

        $fNumber = intval($firstNumber);
        $sNumber = intval($secondNumber);

        if($operation == "Add"){
            echo "The operation is ".$fNumber." + ".$sNumber." = ".($fNumber+$sNumber);
        }else{
            if($operation == "Substract"){
                echo "The operation is ".$fNumber." - ".$sNumber." = ".($fNumber-$sNumber);
            }else{
                if($operation == "Multiply"){
                    echo "The operation is ".$fNumber." * ".$sNumber." = ".($fNumber*$sNumber);
                }else{
                    if($operation == "Divide"){
                        echo "The operation is ".$fNumber." / ".$sNumber." = ".($fNumber/$sNumber);
                    }else{
                        echo "Invalid Parameter";
                    }
                }
            }
        }
    ?>
    
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="fNumber">First Number: </label> <input type="number" name="fNumber" id="">
        <label for="operation">Operation (Add, Subtract, Multiply or Divide): </label> <input type="text" name="operation" id="">
        <label for="sNumber">Second Number: </label> <input type="number" name="sNumber" id="">
        <input type="submit" value="Send">
    </form>
    
</body>
</html>