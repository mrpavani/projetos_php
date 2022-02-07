<?php 


$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$a = count($arr);
$x = 0;

while($x < $a) {
   

    if($arr[$x] == 30 || $arr[$x] == 40) {
        $x++;
        continue;
    }
    
    echo "O elementos $arr[$x] .<br>";

    $x++;

}


?>