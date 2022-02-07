<?php 


$pessoa = ['Pedro', 32, 1.70, 'Dev', 'Casado', 'Brasileiro', 1989, 'Porto Alegre', 'Gremista', 19834598700];

$a = count($pessoa);
$x = 0;


while ($x <= $a) {
    if (is_string($pessoa[$x])) {
        echo $pessoa[$x] . "<br>";
    }

    $x ++;
}


?>