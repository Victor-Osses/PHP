<?php

$numero = '10';

if($numero == 10):
    echo "É igual a 10";
elseif($numero < 10):
    echo "É menor que 10";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

if($numero === 10):
    echo "É igual a 10";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

$cor = "vermelho";

switch($cor):
    case "vermelho":
    echo "Sua cor preferia é o vermelho";
    break;

    case "verde":
    echo "Sua cor preferia é o verde";
    break;

    case "azul":
    echo "Sua cor preferia é o azul";
    break;

    default:
    echo "Sua cor preferia não vermelho, verde ou azul";
endswitch;

echo "<hr>";