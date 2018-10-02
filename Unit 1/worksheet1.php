<?php
    // Woorksheet 1 PHP

    echo "<h1>Woorksheet 1</h1>";

    echo "<h3>Excercice 1</h3>";

    $week = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    echo "<h4>Bucle FOR</h4>";
    for($i=0; $i<=sizeof($week)-1; $i++){
        echo $week[$i]." >> ".$i."<br>";
    }

    echo "<h4>Bucle FOR EACH</h4>";
    foreach($week as $key => $valor){
        echo $valor." >> ".$key."<br>";
    }


    echo "<h3>Excercice 2</h3>";

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


    echo "<h3>Excercice 3</h3>";

    $colors = array(array("Sharp Colors", "Light Colors"),
    array("Red: FF0000", "Green: 00FF00", "Blue: 0000FF",
    "Pink: FE9ABC", "Yellow: FDF189", "Mallow: BC8F8F"));

    echo "<table cellspading='2' border='2'>";
    for($i=0; $i<=count($colors)-1; $i++){
        echo "<tr height='40'>";
        
        if($i==0){
            for($j=0; $j<=3; $j++){
                echo "<td width='40'>";
                echo $colors[$i][$j];
                echo "</td>";
            }
        }else{
            for($k=4; $j<=7; $k++){
                echo "<td width='40'>";
                echo $colors[$i][$j];
                echo "</td>";
            }
        }

        echo "</tr>";
    }

    echo "</table>"
?>