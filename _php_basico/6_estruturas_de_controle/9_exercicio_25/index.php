<?php 

$velocidade = 80;
$multiplicado = 2;


if(is_integer($velocidade)){
    $velocidadeTotal = ($velocidade * $multiplicado);
    if($velocidadeTotal > 100) {
        echo "$velocidadeTotal,  velocidade total é maior que 100";
    }else {
        echo " $velocidadeTotal, velocidade total é menor que 100";
    }
};



?>