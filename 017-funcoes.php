<?php

function exibirNome($nome){
    echo "Meu nome é $nome <hr>";
}

function media($n1 = 0, $n2 = 0, $n3 = 0){
    echo "Minha média é " . (($n1 + $n2 + $n3) / 3) . '<hr>';
}

exibirNome("Victor");
media(1, 2, 3);