<?php 


class Dog {

    function latir(){
        echo "AU AU!!!";
    }

    function andar($m){
        echo "o cachorro andou $m metros";
    }

}

$belinha = new Dog;
$juarez = new Dog;

$belinha ->latir();
$juarez ->latir();


$belinha ->andar(10);
$belinha ->andar(40);


?>