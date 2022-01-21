<?php
 //Sessão
session_start();

//Conexão
include_once 'db_connect.php';

    global $nome;
    global $sobrenome;
    global $email;
    global $idade;

    if(isset($_POST['btn-atualizar'])):
        include_once 'sanitize-validate.php';

        if(isset($_SESSION['mensagem'])):
            header('Location: ../editar.php');
        endif;
    else:
        header('Location: ../index.php');
    endif;