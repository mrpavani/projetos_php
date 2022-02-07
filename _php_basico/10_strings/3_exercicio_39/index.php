<?php 


$itensCasa = [ 
    'batedeira' => 10.00, 
    'liquidificador' => 39.90, 
    'mix' => 199.90, 
    'cafeteira' => 69.90, 
    'talher' => 10 
];

function venda ($itensCasa){
    
    $arrItensCasa = [];

    foreach ($itensCasa as $item => $preco) {
        if ($preco > 80) {
            array_push($arrItensCasa, $item);
        }
    }

    return $arrItensCasa;
}

$novoArr = venda($itensCasa);
print_r($novoArr);

?>