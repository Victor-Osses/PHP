<?php

$nome = sanitize($_POST['nome']);
$sobrenome = sanitize($_POST['sobrenome']);
$email = sanitize($_POST['email']);
$idade = sanitize($_POST['idade']);
 
//Validações
validate($email, FILTER_VALIDATE_EMAIL, "O email informado não é válido!");
validate($idade, FILTER_VALIDATE_INT, "A idade informada não é válida!");

function sanitize($var){
    global $connect;

    //SQL injection
    $var = mysqli_escape_string($connect, $var);

    //XSS
    $var = htmlspecialchars($var);

    return $var;
}

function validate($var, $validate, $msg){
    if(!filter_var($var, $validate)):
        $_SESSION['mensagem'] = $msg . "<br>";
    endif;
}