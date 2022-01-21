<?php
    //Sessão
    session_start();

    //Header
    include_once 'includes/header.php';

    //Mensagem
    include_once 'includes/mensagem.php';

    //Conexão
    include_once 'php_action/db_connect.php';

    if(isset($_GET['id'])):
        $sql = "SELECT * FROM clientes WHERE id=" . $_GET['id'];
        $resultado = mysqli_query($connect, $sql);

        if($resultado):
            $cliente = mysqli_fetch_array($resultado);
        endif;
    else:
        header('Location: ../index.php');
    endif;
?>

    <div class="row">
        <!-- s12: 12 colunas para smartphones
        m6: 6 colunas para tablets 
        push-m3: preenche 3 colunas nas laterais para centralizar os elemtnos em tablets, visto que 6+3+3 =12 -->
        <div class="col s12 m8 push-m2">
            <h3 class="light">Editar Cliente</h3>
            <?php
                session_start();
                if(!isset($_SESSION['erros'])):
                    $_SESSION['erros'] = array();
                endif;

                if(count($_SESSION['erros']) > 0):
                    foreach($_SESSION['erros'] as $erro):
                        echo '<h5 class="col s12 red light">' . $erro . '</h5>';
                    endforeach;
                    $_SESSION['erros'] = array();
                endif;
            ?>

            <form action="php_action/update.php" method="POST">
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