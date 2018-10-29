<?php
    $text = $_POST["string"];
    $radio = $_POST["gender"];
    $file = $_FILES["file"]["name"];
    $password = $_POST["pass"];
    $color = $_POST["selectSimple"];
    $textArea = $_POST["textArea"];

    echo("The text into the text field was: $text");
    echo("You chose the option $radio as your gender.");
    echo("The name of the field that you upload was $file.");
    echo("Your password is $password");
    echo("You choses $color as your favourite color.");
    echo("The text into the text area was : $textArea");

    $checkbox = $_POST["extra"];
    $languate = $_POST["selectMultiple"];

    if(empty($checkbox)) {
        echo("You didn't select any extra.");
    }else{
        $N = count($checkbox);
        echo("You selected $N extra(s): ");
        for($i=0; $i < $N; $i++){
            echo($checkbox[$i] . " ");
        }
    }

    if(empty($checkbox)) {
        echo("You didn't select any language.");
    }else{
        $J = count($checkbox);
        echo("You selected $N language(s): ");
        for($i=0; $i < $J; $i++){
            echo($checkbox[$i] . " ");
        }
    }
?>