<?php
    //Mensagem
    include_once 'includes/mensagem.php';

    //Header
    include_once 'includes/header.php';

    //Conexão
    include_once 'php_action/db_connect.php';

    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);
       
        $sql = "SELECT * FROM clientes WHERE id=".$id ;
        $resultado = mysqli_query($connect, $sql);
        
        if($resultado):
            $cliente = mysqli_fetch_array($resultado);
        else:
            header('Location: index.php');
        endif;
    else:
        header('Location: index.php');
    endif;
?>

    <div class="row">
        <div class="col s12 m8 push-m2">
            <h3 class="light">Editar Cliente</h3>

            <form action="php_action/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome']; ?>" required>
                    <!-- Colcar o id do input no for permite a animação do click no input -->
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $cliente['sobrenome']; ?>" required>
                    <label for="sobrenome">Sobrenome</label>
                </div>
                <div class="input-field col s12">
                    <input type="email" name="email" id="email" value="<?php echo $cliente['email']; ?>" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="idade" id="idade" value="<?php echo $cliente['idade']; ?>" required>
                    <label for="idade">Idade</label>
                </div>
                <button class="btn" type="submit" name="btn-atualizar">Atualizar</button>
                <a href="index.php" class="btn green" type="submit" name="listar-clientes">Lista de clientes</a>
            </form>
        </div>
    </div>

<!-- Footer -->
<?php
    include_once 'includes/footer.php';
?>