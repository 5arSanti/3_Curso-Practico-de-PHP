<?php 
    // print_r($_REQUEST);

    $palabras = ["Sol", "Luna", "Cielo"];

    // Posicion 1
    if($_REQUEST["palabra0"] === $palabras[0]){
        echo "La palabra ingresada es correcta <br>";
    }
    else{
        echo "La palabra ingresada es incorrecta. La palabra correcta es $palabras[0] <br>";
    }

    // Posicion 2
    if($_REQUEST["palabra1"] === $palabras[1]){
        echo "La palabra ingresada es correcta <br>";
    }
    else{
        echo "La palabra ingresada es incorrecta. La palabra correcta es $palabras[1] <br>";

    }

    // Posicion 3
    if($_REQUEST["palabra2"] === $palabras[2]){
        echo "La palabra ingresada es correcta <br>";
    }
    else{
        echo "La palabra ingresada es incorrecta. La palabra correcta es $palabras[2] <br>";

    }
?>