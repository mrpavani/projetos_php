<?php 

function verificaNumero($numero) {
    if ($numero % 2 != 0) {
        echo "Esse numero é Impar";
    }else{
        echo "Esse numero é Par";
    }
}

verificaNumero(21);

?>