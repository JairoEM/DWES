<?php
    //Worksheet 5 Unit 6 Excercise 2

    echo "<h1>Chain Management</h1>";

    $str = "uno-dos-tres-cuatro-cinco";

    $strAux = explote("-",$str);

    echo "<ul>";
    for($i=0; $i<=count($strAux); $i++){
        echo "<li>$strAux[$i]</li>";
    }
    echo "</ul>";
?>