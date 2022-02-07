<?php 

$x = 0;
$limitador = 30;

while ($x < $limitador) {
    
    echo "O contador $x <br>";

    if($x === 12){
        echo " o $x é 12";
        break;
    }
    
    $x += 2;

}


?>