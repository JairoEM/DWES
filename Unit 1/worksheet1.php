<?php
    // Woorksheet 1 PHP

    echo "<h1>Woorksheet 1</h1>";

    echo "<h3>Excercise 1</h3>";

    $week = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    echo "<h4>Bucle FOR</h4>";
    for($i=0; $i<=sizeof($week)-1; $i++){
        echo $week[$i]." >> ".$i."<br>";
    }

    echo "<h4>Bucle FOR EACH</h4>";
    foreach($week as $key => $valor){
        echo $valor." >> ".$key."<br>";
    }


    echo "<h3>Excercise 2</h3>";

    $students = array("Jairo", "Victor", "Alejandro", "Maria del Carmen", "Tipo de Incognito");

    $stuSlice = array_slice($students, 0, 3);

    $stuSplice = array_splice($students, 3);

    echo "<h4>Array Slice</h4>";

    for($i=0; $i<=count($stuSlice)-1; $i++){
        echo $stuSlice[$i]."<br>";
    }

    echo "<h4>Array Splice</h4>";

    for($i=0; $i<=count($stuSplice)-1; $i++){
        echo $stuSplice[$i]."<br>";
    }


    echo "<h3>Excercise 3</h3>";

    $colors = array(array("Sharp Colors", "Light Colors"),
    array("#FF0000", "#00FF00", "#0000FF",
    "#FE9ABC", "#FDF189", "#BC8F8F"));

    echo "<table cellspading='2' border='2'>";
    
    $auxColours = 0;

    for($i=0; $i<=count($colors)-1; $i++){
        echo "<tr height='40'>";

            echo "<td width='40'>";
            echo $colors[0][$i];
            echo "</td>";

            for($j=0; $j<=2; $j++){
                echo "<td width='40' bgcolor='".$colors[1][$auxColours]."'>";
                echo $colors[1][$auxColours];
                echo "</td>";
                $auxColours++;
            }

        echo "</tr>";
    }

    echo "</table>"
?>