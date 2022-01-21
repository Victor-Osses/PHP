<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>

        <?php
            if(isset($_POST['enviar-formulario'])):
                 //echo "<pre>"; var_dump($_FILES); echo "</pre>"; exit;
                $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
                $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

                if(in_array($extensao, $formatosPermitidos)):
                    $pasta = "arquivos/";//Pasta para qual o arquivo será movido
                    $temporario = $_FILES['arquivo']['tmp_name'];//Caminho temporário no qual o arquivo se encontra
                    $novoNome = uniqid().".$extensao";//Nome para o arquivo

                    if(move_uploaded_file($temporario, $pasta.$novoNome)): //Movendo arquivo para a nova pasta e verificando
                        $mensagem = "Upload feito com sucesso!";
                    else:
                        $mensagem = "Erro, não foi possível fazer o upload";
                    endif;
                else:
                    $mensagem = "Formato inválido!";
                endif;

                echo $mensagem;
            endif;
        ?>

        <!--O atributo enctype especifica como os dados de formulário devem ser codificados ao submetê-los ao servidor.
        O multipart/form-data é necessário para fazer o upload de arquivos
        $_SERVER['PHP_SELF'] -> para a página chamar a si mesma
        -->
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo"><hr>
            <input type="submit" name="enviar-formulario">
        </form>
</body>
</html>