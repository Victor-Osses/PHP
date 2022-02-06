<?php
//conexão

require_once 'db_connect.php';

//Sessão

session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']); // Para tratar as entradas
    $senha = mysqli_escape_string($connect, $_POST['senha']); // Previne sql injection

    if(empty($login) || empty($senha)):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login='$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login= '$login' AND senha= '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado); // Converte o resultado em um array
                mysqli_close($connect); // Fechando a conexão

                $_SESSION['logado'] = true;
                $_SESSION['id'] = $dados['id'];

                header('Location: home.php');
            else:
                $erros[] = "<li>Usuário e senha não conferem</li>";
            endif;
        else:
            $erros[] = "<li>Usuário inexistente</li>";
        endif;

    endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <h1>Login</h1>

    <?php 
        if(!empty($erros)):
            foreach($erros as $erro):
                echo $erro;      
            endforeach;
        endif;
    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>