<?php 



class Humano {

    public $altura = 1.62;
    public $idade = 24;
    public $corPele = 'Negra';
    public $cpf = 12345678909;

    public function falar(){

        echo "Olá tudo bem?";
    }
}

class Professor extends Humano{


    public $materia = "Geografica";
    public $tempoExperiencia = 8;
    
    public function aula(){
        echo "Aula de quimica";
    }


}

$maria = new Humano;

$maria->falar();
echo "<br>";

echo "$maria->altura . <br>";
echo "$maria->idade . <br>";
echo "$maria->corPele . <br>";

$pedro = new Professor;

$pedro->aula();
echo "<br>";
$pedro->falar();
echo "<br>";

echo $pedro->altura . "<br>";
echo $pedro->idade . "<br>";
echo $pedro->corPele . "<br>";
echo $pedro->cpf . "<br>";
echo $pedro->materia . "<br>";
echo $pedro->tempoExperiencia. "<br>";


?>


