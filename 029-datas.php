<?php
//Setando a região
date_default_timezone_set('America/Sao_Paulo');

echo "<b>date('d'):</b>  " . date('d') . "<br>";
echo "<b>date('D'):</b>  ". date('D') . "<br>";
echo "<b>date('m'):</b>  ". date('m') . "<br>";
echo "<b>date('M'):</b>  ". date('M') . "<br>";
echo "<b>date('y'):</b>  ". date('y') . "<br>";
echo "<b>date('Y'):</b>  ". date('Y') . "<br>";
echo "<b>date('d/m/Y'):</b>  ". date('d/m/Y') . "<br>";
echo "<b>date('l'):</b>  ". date('l') . "<br>";
echo "<b>date('d/m/Y h'):</b>  ". date('d/m/Y h') . "<br>";
echo "<b>date('d/m/Y H'):</b>  ". date('d/m/Y H') . "<br>";
echo "<b>date('d/m/Y H:i:s'):</b> ". date('d/m/Y H:i:s') . "<br>";
echo "<b>date('d/m/Y H:i:s A'):</b> ". date('d/m/Y H:i:s A') . "<br>";
echo "<hr>";

//Para armazenar uma data no banco de dados, utilizar os seguintes formatos para date e dateTime:
$date = date('Y-m-d');
$dateTime = date('Y-m-d H:i:s');
echo $date . "<br>";
echo $dateTime . "<br><hr>";

//Quantidade de segundos que se passaram desde 1970 até agr
$time = time();
echo '<b>$time == ' . $time . ' -> date("d/m/Y", $time) :</b> ' . date('d/m/Y', $time) . "<br><hr>";

//MKTIME(hora, minuto, segundo, mes, dia, ano)
$data_pagamento = mktime(15, 30, 00, 02, 22, 2023);
echo "<b>mktime(15, 30, 00, 02, 22, 2023):</b> " . date("d/m - H:i", $data_pagamento) . "<br>";

//STRTOTIME
$data = '2019-04-10'; //Vai vir assim do banco se for uma coluna do tipo date
$data2 = '2019-04-10 15:04:22'; //Vai vir assim do banco se for uma coluna do tipo dateTime
//A data vai vir como string do banco

$data = strtotime($data);
echo "<b>strotime('2019-04-10')</b>: " . date('d/m/Y', $data) . "<br>";

