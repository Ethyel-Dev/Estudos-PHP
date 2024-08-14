<?php 
    $frase = "O rato roeu a roupa do rei de Roma, a partir de um loop";

    $contadorDeAs = 0;

    for($i = 0; $i < strlen($frase); $i++) { 

        if($frase[$i] === "a") {
            $contadorDeAs++;
        }   
    }
    echo "O numero total de A's na frase é de: $contadorDeAs";
?>