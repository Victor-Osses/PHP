<?php

require __DIR__ . '/vendor/autoload.php';

//Dependência
use \App\Entity\Vaga;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

//Consulta a Vaga
$obVaga = Vaga::getVaga($_GET['id']);

//Validar se a vaga com o ID da URL existe
if(!($obVaga instanceof Vaga)){
    header('location: index.php?status=error');
    exit;
}

if(isset($_POST['excluir'])){
    $obVaga->excluir();
    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirmar-exclusao.php';
include __DIR__ . '/includes/footer.php';
?>