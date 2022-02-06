<!-- Include e Require servem para incluir o conteúdo de um arquivo php em outro arquivo php-->

<!-- Include:  Caso o arquivo não exita ele exibe um erro e CONTINUA o script-->
<!-- Require: caso o arquivo não exita ele exibe um erro e ENCERRA o script -->

<!-- include_once e require_once: Verificam se os arquivos já foram incluídos -->

<?php 
 include_once 'header.php'; 
 include_once 'header.php'; 
?>

<?php 
  echo "Olá, pessoal!";
?>

<?php 
  require_once 'footer.php'; 
  require_once 'footer.php';
?>

