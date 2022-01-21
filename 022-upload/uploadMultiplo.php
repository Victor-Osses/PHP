<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <!-- Todos os servidores tem uma tamanho máximo para dados enviados via POST -->

    <?php
        if (isset($_POST['formulario-enviado'])) {
            //echo "<pre>"; var_dump($_FILES); echo "</pre>"; exit;
            $formatos = array("jpg", "png", "jpeg", "jfif", "gif");
            $contador = 0;
            $quantidadeArquivos = count($_FILES['arquivo']['name']);

            while($contador < $quantidadeArquivos):
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

                if(in_array($extensao, $formatos)){
                    $pastaAtual = "arquivos/";
                    $pastaTemporaria = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";

                    if(move_uploaded_file($pastaTemporaria, $pastaAtual.$novoNome)){
                        echo "Upload de arquivo concluído com sucesso!<br>";
                    }else{
                        echo "Upload de arquivo falhou!<br>";
                    }
                }else{
                    echo "Formato de arquivo inválido!<br>";
                }
                $contador++;
            endwhile;
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple><hr>
        <input type="submit" value="Enviar" name="formulario-enviado">
    </form>
</body>
</html>