<?php 
    $words = ["Sol", "Luna", "Cielo", "Luz", "Estrellas", "Lluvia"];

    for ($i=0 ; $i < count($words) ; $i++ ) { 
        if($_REQUEST["palabra$i"] === $words[$i]){
            echo "La palabra ingresada es correcta <br>";
        }
        else{
            echo "La palabra ingresada es incorrecta. La palabra correcta es $words[$i] <br>";
        }
    };
?>