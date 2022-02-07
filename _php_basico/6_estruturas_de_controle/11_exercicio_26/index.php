<?php 

$velocidade = 100;

$velocidadePermitida = 40;


if ($velocidade < 40) {
    echo "motorista está abaixo da velocidade permitida";
} else if ($velocidade == 40){
    echo "VElocidade no limite, tome cuidado!";
}else {
    echo "velocidade acima do permitido, MULTADO";
}

?>