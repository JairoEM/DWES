<?php
    $text = $_POST["string"];
    $radio = $_POST["gender"];
    $file = $_FILES["file"]["name"];
    $password = $_POST["pass"];
    $color = $_POST["selectSimple"];
    $textArea = $_POST["textArea"];

    echo("<h1>User Info</h1>");
    echo("The text into the text field was: $text");
    echo("<br>");
    echo("You chose the option $radio as your gender.");
    echo("<br>");
    echo("The name of the field that you upload was $file.");
    echo("<br>");
    echo("Your password is $password");
    echo("<br>");
    echo("You choses $color as your favourite color.");
    echo("<br>");
    echo("The text into the text area was : $textArea");
    echo("<br>");

    $checkbox = $_POST["extra"];
    $language = $_POST["selectMultiple"];

    if(empty($checkbox)){
        echo("You didn't select any extra.");
    }else{
        $N = count($checkbox);
        echo("You selected $N extra(s): ");
        for($i=0; $i < $N; $i++){
            echo($checkbox[$i] . " ");
        }
    }
    echo("<br>");

    if(empty($language)){
        echo("You didn't select any language.");
    }else{
        $J = count($language);
        echo("You selected $J language(s): ");
        for($k=0; $k < $J; $k++){
            echo($language[$k] . " ");
        }
    }
    echo("<br>");
?>