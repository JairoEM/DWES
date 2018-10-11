<?php

echo "<h1>Prueba de Nivel</h1>";

echo "<p>Prueba de Nivel</p>";

echo "<h3>Ejercicio 5</h3>";

$frase1 = "La bala mata la vaca";
$frase2 = "El oso osó asi a la osa";

function ejercicio1($str){
    $arr1 = str_split($str);
    $countA = 0;

    for($i=0; $i<count($arr1); $i++){
        if($arr1[$i] == "a"){
            $countA++;
        }
    }

    echo "La frase '".$str."' contiene ".$countA." veces la letra a. <br>";
}

ejercicio1($frase1);
ejercicio1($frase2);


echo "<h3>Ejercicio 7</h3>";

$frase3 = "CadenaOriginal";

function ejercicio2($str){
    $arr2 = str_split($str);
    $arrAux = array();

    for($i=0; $i<count($arr2); $i++){
        array_push($arrAux, $arr2[$i], $arr2[$i]);
    }

    for($j=0; $j<count($arrAux); $j++){
        echo $arrAux[$j];
    }
}

ejercicio2($frase3);




echo "<h3>Ejercicio 5 B</h3>";

function ejercicio1B($str){
    $arr1 = str_split($str);
    $arrAuxA = array_unique($arr1);
    $arrAuxB = array_pad($arrAuxB = array(), count($arrAuxA), 0);

    for($i=0; $i<count($arr1); $i++){

        for($j=0; $j<count($arrAuxA); $j++){

            if($arr1[$i] == $arrAuxA[$j]){
                $arrAuxB[$j] = $arrAuxB[$j]+1;
            }
        }
    }

    for($z=0; $z<count($arrAuxB); $z++){
        echo "La frase '".$str."' contiene ".$arrAuxB[$z]." veces la letra ".$arrAuxA[$z].". <br>";
    }
}

ejercicio1B($frase1);
ejercicio1B($frase2);
?>