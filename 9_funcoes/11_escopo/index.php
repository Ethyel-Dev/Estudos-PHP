<?php 

    $a = 10;
    $b = 20;

    function testeescopo() { // Usando variavel do (escopo Local) -> que e dentro da function

        $a = 5;

        echo "Teste escopo Local: $a <br>";
    }

    echo "Teste escopo Global: $a <br>";

    echo testeescopo();


    function testeescopo2() { // Usando variavel do escopo Global no escopo Local

        $a = 5;

        global $b;

        $b++; //Obs auterar variavel global dentro do local tambem autera o global 

        echo "Chamndo valo global no local: $b <br>";
    }

    echo testeescopo2();
?>