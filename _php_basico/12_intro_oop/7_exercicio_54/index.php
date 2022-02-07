<?php 


class Pessoa {

    public $nome;
    public $idade;

    function andar ($km) {
        echo "A pessoa andou $km ";
    }

}

$funcionario = new Pessoa;

$funcionario->nome = "Marcos";
$funcionario->idade = 42;

echo "O nome do funcionario e $funcionario->nome e tem $funcionario->idade e já andou  <br>";


$funcionario->andar(10);


?>