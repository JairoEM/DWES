<?php
    // Worksheet 1.4 PHP Jairo Eduardo Machado
    echo "<h1>Exercise Worksheet 1.4</h1>";

    $phrase = "Esta cadena tiene muchas letras";
    echo $phrase;

    // Exercise 1
    echo "<h2>Exercise 1</h2>";
    
    echo "<h3>Exercise 1.1</h3>";

    $pos = stripos($phrase, "a");
    echo "The first 'a' was on $pos position";

    echo "<h3>Exercise 1.2</h3>";

    $pos = stripos($phrase, "m");
    echo "The first 'm' was on $pos position.";

    echo "<h3>Exercise 1.3</h3>";

    $pos = stripos($phrase, "tiene");
    echo "The first 'tiene' was on $pos position.";

    echo "<h3>Exercise 1.4</h3>";

    $pos = strripos($phrase, "a");
    echo "The last 'a' was on $pos position.";

    echo "<h3>Exercise 1.5</h3>";

    $pos = stristr($phrase, "cadena");
    echo "Phrase after substring 'cadena' are '$pos'";

    echo "<h3>Exercise 1.6</h3>";

    $pos = substr($phrase, 12, strlen($phrase));
    echo "All characters after position 12 are '$pos'";

    echo "<h3>Exercise 1.7</h3>";

    $pos = substr($phrase, 18, 6);
    echo "6 characters after the character 18th are '$pos'";

    echo "<h3>Exercise 1.8</h3>";

    $pos = substr($phrase, -6);
    echo "Last 6 characters are '$pos'";

    echo "<h3>Exercise 1.8</h3>";

    $pos = substr($phrase, -26, 6);
    echo "6 characters after character 26 from the bottom are '$pos'";

    echo "<h3>Exercise 1.8</h3>";

    $pos = substr($phrase, 4, -7);
    echo "Characters between position 4, from the begging, and 7, from the bottom, are '$pos'";


    // Exercise 2
    echo "<h2>Exercise 2</h2>";
    

?>