<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Filters</title>
</head>
<body>
    <?php
    /* Alguns filtros de validação
    FILTER_SANITIZE_SPECIAL_CHARS: Permite o escape de códigos html (ex: <b>nome</b>)
    FILTER_SANITIZE_NUMBER_INT: Filtra a entrada para um número inteiro (ex: asds6adsa123)
    FILTER_SANITIZE_EMAIL: Formata corretamente um email (ex: vic.()@gmail.com)
    FILTER_SANITIZE_URL: Formata corretamente uma url (ex: no de ²£¢st udio.com.br)
    */
    ?>

    <?php
        if(isset($_POST['enviar-formulario'])){
            $erros = array();
            
            //Sanitize
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            echo 'Filtro: ' . $nome . '<br>Antes do filtro: ' . $_POST['nome'] . '<hr>';

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            echo 'Filtro: ' . $idade . '<br>Antes do filtro: ' . $_POST['idade'] . '<hr>';

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade, FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser inteira!<br>";
            endif;

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            echo 'Filtro: ' . $email . '<br>Antes do filtro: ' . $_POST['email'] . '<hr>';

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                $erros[] = "Formatação de email incorreta!<br>";
            endif;

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            echo 'Filtro: ' . $url . '<br>Antes do filtro: ' . $_POST['url'] . '<hr>';

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)):
                $erros[] = "Formatação de URL incorreta!<br>";
            endif;
        }

        if(!empty($erros)):
            foreach($erros as $erro){
                echo $erro;
            }
        else:
            echo "<b>Parabéns, seus dados estão corretos!</b>";
        endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        URL: <input type="text" name="url">
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>
