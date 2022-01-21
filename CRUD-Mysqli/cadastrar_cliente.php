<?php
    include_once 'includes/mensagem.php';

    //Header
    include_once 'includes/header.php';
?>

    <div class="row">
        <!-- s12: 12 colunas para smartphones
        m6: 6 colunas para tablets 
        push-m3: preenche 3 colunas nas laterais para centralizar os elemtnos em tablets, visto que 6+3+3 =12 -->
        <div class="col s12 m8 push-m2">
            <h3 class="light">Novo Cliente</h3>

            <form action="php_action/create.php" method="POST">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome" required>
                    <!-- Colcar o id do input no for permite a animação do click no input -->
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="sobrenome" id="sobrenome" required>
                    <label for="sobrenome">Sobrenome</label>
                </div>
                <div class="input-field col s12">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="idade" id="idade" required>
                    <label for="idade">Idade</label>
                </div>
                <button class="btn" type="submit" name="btn-cadastrar">Cadastrar</button>
                <a href="index.php" class="btn green" type="submit" name="listar-clientes">Lista de clientes</a>
            </form>
        </div>
    </div>

<!-- Footer -->
<?php
    include_once 'includes/footer.php';
?>