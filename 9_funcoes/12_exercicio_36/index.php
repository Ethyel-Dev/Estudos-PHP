<?php
    $arr = [45, 7, 4, 18, 2, 28, 1, 40, 25, 3];

    function encontrarMaioresQueSete($arr) {
        $resultados = [];
        
        foreach ($arr as $numero) {
            if ($numero > 7) {
                $resultados[] = $numero;
            }
        }
        
        return $resultados;
    }
    
    $numerosMaiores = encontrarMaioresQueSete($arr);
    
    echo "Números maiores que 7: " . implode(", ", $numerosMaiores);    

?>