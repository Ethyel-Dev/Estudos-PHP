<?php 

    function verificar($num) {
        if ($num % 2 == 0) {
           echo "O numero $num e par <br>";
        } else {
            echo "O numero $num e impar <br>";
        }
    }
    

    echo verificar(5);
?>