<?php 


$pessoa = [
    'nome' => 'Pavani', 
    'profissão' => 'Analista', 
    'idade' => 21, 
    'nacido' => 'São Paulo',
];

$nome = $pessoa['nome'];
$idade = $pessoa['idade'];


if ($idade >= 18 ) {
    echo "$nome, tem $idade, ele é maior de idade";
} else {
    echo "$nome, não é maior de idade";
};


//if ($pessoa['idade'] >= 18) {
//    echo "Pesoal é maior de idade";
//}


?>