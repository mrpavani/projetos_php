<?php 



class Carro {

    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel){
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade maxima do carro é: $this->velocidadeMaxima km/h <br>";
    }


}

$bmw = new Carro;

$bmw->cor = "Branca";
$bmw->tetoSolar = true;
$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();


?>