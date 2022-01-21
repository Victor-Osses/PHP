<?php

$nome = mysqli_escape_string($connect, $_POST['nome']);
$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
$email = mysqli_escape_string($connect, $_POST['email']);
$idade = mysqli_escape_string($connect, $_POST['idade']);

//Sanitizações
sanitize('nome', FILTER_SANITIZE_SPECIAL_CHARS);
sanitize('sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
sanitize('email', FILTER_SANITIZE_EMAIL);
sanitize('idade', FILTER_SANITIZE_NUMBER_INT);
 
//Validações
validate($email, FILTER_VALIDATE_EMAIL, "O email informado não é válido!");
validate($idade, FILTER_VALIDATE_INT, "A idade informada não é válida!");

function sanitize($name, $sanitize){
    $$name = filter_input(INPUT_POST, $name, $sanitize);
}

function validate($var, $validate, $msg){
    if(!filter_var($var, $validate)):
        $_SESSION['mensagem'] = $msg . "<br>";
    endif;
}