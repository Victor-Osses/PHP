<?php
$senha = "123456";
$novaSenha = base64_encode($senha);
$senha_db = '$2y$10$sQjrEDHiYdEGkG8jAqeMSeUCgF1Nl1tVzOHVF8zGci5/UcZim1sBO';

if(password_verify($senha, $senha_db)):
    echo "Senha válida<br>";
else:
    echo "Senha inválida<br>";
endif;

echo "<b>base64_enconde($senha):</b> $novaSenha<br>";
echo "<b>base64_decode($novaSenha):</b>". base64_decode($novaSenha);
echo "<hr>";

$novaSenha = md5($senha);
echo "<b>md5($senha):</b> $novaSenha<br>";
echo "<b>Não é possível descriptografar!</b>";
echo "<hr>";

$novaSenha = sha1($senha);
echo "<b>sha1($senha):</b> $novaSenha<br>";
echo "<b>Não é possível descriptografar!</b>";
echo "<hr>";

//Senha segura
echo "<h4>SENHA SEGURA:</h4>";

$options = [
    //10 por dafault
    'cost' => 10, //Quanto maior o cost, mais seguro o hash, porém, mais recursos de hardware são consumidos
];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo "<b>password_hash($senha, PASSWORD_DEFAULT)</b>: $senhaSegura";