<?php

/** Array numéricos */
$carros = array('BMW', 'Veloster', 'Hilux');
echo $carros[0] . '<hr>';
$carros = array(1=>'BMW', 3=>'Veloster', 2=>'Hilux');
echo $carros[2] . '<hr>';

$carros[] = "Amarok";
$carros[10] = "Camaro";

//Função específica para exibir um array
print_r($carros);
echo '<hr>';

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);
echo '<hr>';

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo '<hr>';
echo 'Quantidade de elemtnos no array de carros: '. count($carros);
echo '<hr>';

foreach($carros as $carro){
    echo $carro . '<br>';
}

echo '<hr>';

/** Array associativos */
$pessoa = ["Nome" => "José", "Idade"=>21, "Altura"=>1.56];
echo $pessoa["Nome"] . '<hr>';
$pessoa['Cidade'] = "Taubaté";

foreach($pessoa as $indice => $valor){
    echo $indice. ' : ' . $valor . '<br>';
}

echo '<hr>';

/** Array multidimensioanis */
$pessoas = [
        ["Nome" => "José", "Idade"=>21, "Altura"=>1.56], 
        ["Nome" => "Maria", "Idade"=>33, "Altura"=>1.66]];
    
echo  $pessoas[1]["Nome"] . '<hr>';

foreach($pessoas as $pessoa){
    foreach($pessoa as $indice => $valor):
        echo $indice. ' : ' . $valor . '<br>';
    endforeach;   
}

echo '<hr>';

$pessoas = array(
        "Pessoa1"=>array("Nome" => "José", "Idade"=>21, "Altura"=>1.56), 
        "Pessoa2"=>array("Nome" => "Maria", "Idade"=>33, "Altura"=>1.66)
        );

echo $pessoas["Pessoa2"]["Altura"] . '<hr>';

foreach($pessoas as $indice1 => $pessoa):
    echo '<b>'.$indice1.':</b><br>';
    foreach($pessoa as $indice2 => $valor){
        echo $indice2.': '.$valor.'<br>';
    }
endforeach;
echo '<hr>';

//OU
foreach($pessoas['Pessoa1'] as $indice => $valor):
        echo $indice.': '.$valor . '<br>';
endforeach;