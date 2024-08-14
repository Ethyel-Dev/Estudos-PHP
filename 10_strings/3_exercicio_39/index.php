<?php 
      $arr = [
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
      ];

    function preco($arr){
        $produtosCaros = [];
        // $objetos - sao porta, maçanete / $valor - E o preço determinado dentro do Arr
        foreach ($arr as $objetos => $valor) {
            if($valor > 10) {
                array_push($produtosCaros, $objetos);   
            }
        }

        return $produtosCaros;
    }


    $novoArr = preco($arr);

    print_r($novoArr)
?>