<?php

session_start();
require_once 'db_connect.php';

    global $nome;
    global $sobrenome;
    global $email;
    global $idade;

    if (isset($_POST['btn-cadastrar'])):

        include_once 'sanitize-validate.php';

        if(isset($_SESSION['mensagem'])):
            header('Location: ../cadastrar_cliente.php');
        else:
            $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
            $resultado = mysqli_query($connect, $sql);
            mysqli_close($connect);

            if($resultado):
                $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
                header("Location: ../index.php");
            else:
                $_SESSION['mensagem'] = "Falha ao tentar cadastrar cliente!";
                header("Location: ../index.php");
            endif;
        endif;
    else:
        header('Location: ../index.php');
    endif;