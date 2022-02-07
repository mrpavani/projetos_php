<?php 


function defineCorCarro($cor = "vermelho"){

    echo "a Cor padrão do carro é $cor";


}

$carroVermelho = defineCorCarro();
echo $carroVermelho . "<br>";


$carroBranco = defineCorCarro("branco");
echo "$carroBranco <br>";

?>