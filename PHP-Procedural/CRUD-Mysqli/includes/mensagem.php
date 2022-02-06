<?php
   //Sessão
   session_start();
   if(isset($_SESSION['mensagem'])):
?>
   
<script>
   //Quando a página for completamente carregada
   window.onload = function(){
       M.toast({html: '<?php echo $_SESSION['mensagem']; ?>' });//Exibe a mensagem por meio do materialize
   };
</script>

<?php
   endif;
   session_unset();
?>