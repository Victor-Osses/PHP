<?php
//O valor da constante não pode ser alterado
//Por default, constante são sempre em maiúsculo
//As constantes são automaticamente globais
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.65);
define("CASADO", true);
define("TIMES", ['Vasco', 'Flamengo', 'Santos']);

echo 'Meu nome é '. NOME . ', minha idade é '. IDADE. 'e minha altura é ' . ALTURA;
echo '<hr>';

function exibeTimes(){
    //As constantes são automaticamente globais
    foreach(TIMES as $time){
        echo $time;
        echo '<hr>';
    }    
}

exibeTimes();
