<?php 
    $words = ["Sol", "Luna", "Cielo", "Luz", "Estrellas", "Lluvia"];


    $form = "<form action='analisis.php'>";
    for ($i=0; $i < count($words); $i++) { 
        $form .= "La palabra: " . str_shuffle($words[$i]) . " " . 
        "<input type='text' name='palabra" . $i ."'>" . 
        "<br> <br>";
    }

    $button = "<button type='sumbit'>Enviar</button>";
    $formCierre = "</form>";


    echo $form . $button . $formCierre;
?> 