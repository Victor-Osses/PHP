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
            header('Location: ../editar.php?id='.$_POST['id']);
        else:
            $sql = "UPDATE clientes SET nome = '$nome', sobrenome='$sobrenome', email='$email', idade='$idade' WHERE id=".$_POST['id'];
            $resultado = mysqli_query($connect, $sql);

            if($resultado):
                $_SESSION['mensagem'] = "Cliente atualizado com sucesso!";
                mysqli_close($connect);
                header('Location: ../index.php');
            else:
                $_SESSION['mensagem'] = "Falha ao tentar atualizar cliente!";
                mysqli_close($connect);
                header('Location: ../index.php');
            endif;

        endif;
    else:
        header('Location: ../index.php');
    endif;