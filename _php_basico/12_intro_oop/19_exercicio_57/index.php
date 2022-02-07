<?php 



class Cachorro {

    public $raca;
    public $porte;
    public $nome;

    function __construct($raca, $porte, $nome){
        $this->raca = $raca;
        $this->porte = $porte;
        $this->nome = $nome;
    }


}

$dog = new Cachorro("puldo", "pequeno", "Mel");

echo "A $dog->nome é uma cão $dog->porte pois é um $dog->raca";



?>