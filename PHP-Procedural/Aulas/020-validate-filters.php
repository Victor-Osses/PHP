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
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDADE_IP
    FILTER_VALIDADE_URL
    */
    ?>

    <?php
        if(isset($_POST['enviar-formulario'])){
            $erros = array();
            if(!($idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT))):
                $erros[] = "<b>Informe uma idade válida!</b><br>";
            endif;

            if(!($email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))):
                $erros[] = "<b>Informe um email válido!</b><br>";
            endif;

            if(!($peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT))):
                $erros[] = "<b>Informe um peso válido!</b><br>";
            endif;

            if(!($peso = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP))):
                $erros[] = "<b>Informe um ip válido!</b><br>";
            endif;

            if(!($peso = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL))):
                $erros[] = "<b>Informe uma URL válida!</b><br>";
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
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        Ip: <input type="text" name="ip"><br>
        URL: <input type="text" name="url">
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>
