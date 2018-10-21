<?php
// Worksheet 1.5 Unit 6

//Exercise 1

$strFile = $_POST["type"];

function calcula_extension($str){
    $type = explode(".",$str);
    echo strtoupper($type[1]);
}

function tipo_fichero($str){
    $type = explode(".",$str);
    $typeAux = strtoupper($type[1]);

    switch($typeAux){
        case "PDF":
            echo "Documento Adobe PDF";
            break;
        case "TXT":
            echo "Documento de texto";
            break;
        case "HTML":
            echo "Dcoumento HTML";
            break;
        case "PPT":
            echo "Presentación Microsoft Powerpoint";
            break;
        case "DOC":
            echo "Documento Microsoft Word";
            break;
        case "GIF":
            echo "Imagen GIF";
            break;
        case "JPG":
            echo "Imagen JPG";
            break;
        case "ZIP":
            echo "Archivo comprimido ZIP";
            break;
        default:
            echo "Archivo $typeAux";
            break;
    }
}

calcula_extension($strFile);
tipo_fichero($strFile);

?>