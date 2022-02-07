<?php 


$produto1 = 6;
$produto2 = 7;


$total = ($produto1 + $produto2);


if($total >= 10) {
    $valorDesconto = ($total * 0.1);
    echo ($total - $valorDesconto);
}else {
    echo $total;
}


?>