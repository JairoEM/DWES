<?php
    // Worksheet 1.4 PHP Jairo Eduardo Machado
    echo "<h1>Exercise Worksheet 1.4</h1>";

    // Exercise 1
    echo "<h2>Exercise 1</h2>";

    $phrase = "Esta cadena tiene muchas letras";
    echo $phrase;
    
    // Functions
    function f1($phrase, $str){
        $pos = stripos($phrase, $str);
        return $pos;
    }

    function f2($phrase, $str){
        $pos = strripos($phrase, $str);
        return $pos;
    }

    function f3($phrase, $str){
        $pos = stristr($phrase, $str);
        return $pos;
    }

    function f4($phrase, $int, $int2){
        $pos = substr($phrase, $int, $int2);
        return $pos;
    }

    //Exercises
    echo "<h3>Exercise 1.1</h3>";

    echo "The first 'a' was on ".f1($phrase, "a")." position";

    echo "<h3>Exercise 1.2</h3>";

    echo "The first 'm' was on ".f1($phrase, "m")." position.";

    echo "<h3>Exercise 1.3</h3>";

    echo "The first 'tiene' was on ".f1($phrase, "tiene")." position.";

    echo "<h3>Exercise 1.4</h3>";

    echo "The last 'a' was on ".f2($phrase, "a")." position.";

    echo "<h3>Exercise 1.5</h3>";

    echo "Phrase after substring 'cadena' are '".f3($phrase, "cadena")."'";

    echo "<h3>Exercise 1.6</h3>";

    echo "All characters after position 12 are '".f4($phrase, 12, strlen($phrase))."'";

    echo "<h3>Exercise 1.7</h3>";

    echo "6 characters after the character 18th are '".f4($phrase, 18, 6)."'";

    echo "<h3>Exercise 1.8</h3>";

    echo "Last 6 characters are '".f4($phrase, -6, 6)."'";

    echo "<h3>Exercise 1.9</h3>";

    echo "6 characters after character 26 from the bottom are '".f4($phrase, -26, 6)."'";

    echo "<h3>Exercise 1.10</h3>";

    echo "Characters between position 4, from the begging, and 7, from the bottom, are '".f4($phrase, 4, -7)."'";


    // Exercise 2
    echo "<h2>Exercise 2</h2>";

    $phrase2 = "Bienvenidos a la aventura de aprender PHP en 30 horas";
    echo $phrase2;

    // Functions
    function f5($str1, $str2, $phrase2){
        $pos = str_replace($str1, $str2, $phrase2);
        return $pos;
    }

    // Exercises
    echo "<h3>Exercise 2.1</h3>";
    $auxLength = strlen($phrase2)/3;
    echo "Show the middle of the phrase: '".f4($phrase2, intval($auxLength), -intval($auxLength))."'";

    echo "<h3>Exercise 2.2</h3>";
    echo "The first 'PHP' was on ".f1($phrase2, "PHP")." position.";

    echo "<h3>Exercise 2.3</h3>";
    echo "If we change 'aventura' for 'mision' the phrase will be '".f5("aventura", "<b>mision</b>", $phrase2)."'";


    // Exercise 3
    echo "<h2>Exercise 3</h2>";

    $link = "<a href='/arbol/prueba.php' class='prueba' onmouseOver=\"status=\'hola\'; return trae;\">Prueba de Enlace</a>";

    function f6($link){
        echo $link;
        echo "<br>";
        echo htmlentities($link);
        echo "<br>";
        echo highlight_string($link);
    }
    
    echo f6($link);
?>