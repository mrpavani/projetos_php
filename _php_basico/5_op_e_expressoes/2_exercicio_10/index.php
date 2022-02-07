<?php 


$calca = 99.90;
$camiseta = 59.90;
$bone = 25;

$qtde = 2;

$totalCompra = ($calca + ($qtde * $camiseta) + $bone);

if ($totalCompra >= 150):
    $parcelar = $totalCompra / 3;
    echo "valor foi parcelado em 3, cada parcela $parcelar";
elseif ($totalCompra >= 100):
    $parcelar = $totalCompra / 2;
    echo "valor foi parcelado em 2, cada parcela $parcelar";
else:
    echo "O $totalCompra, somente é pago a vista ";
endif;


?>