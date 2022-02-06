<?php
//Sessões são utilizadas para armazenar informações e utiliza-las em várias páginas
//Uma sessão é encerrada quando fechamos o navegador

session_start();
$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br>" . session_id();