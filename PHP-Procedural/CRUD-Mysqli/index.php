<!-- Header -->
<?php
    //Mensagem
    include_once 'includes/mensagem.php';

    //Conexão
    include_once 'php_action/db_connect.php';

    //Header
    include_once 'includes/header.php';
?>
    <div class="row">
        <!-- s12: 12 colunas para smartphones
        m6: 6 colunas para tablets 
        push-m3: preenche 3 colunas nas laterais para centralizar os elemtnos em tablets, visto que 6+3+3 =12 -->
        <div class="col s12 m8 push-m2">
            <h3 class="light">Clientes</h3>

            <!-- striped : deixa a tabela "zebrada" -->
            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Sobrenome:</th>
                        <th>Email:</th>
                        <th>Idade:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM clientes";
                        $resultado = mysqli_query($connect, $sql);

                        if(mysqli_num_rows($resultado) > 0):
                            while($cliente = mysqli_fetch_array($resultado)):
                                echo 
                                '<tr>
                                <td> ' . $cliente['nome'] . '</td> 
                                <td> ' . $cliente['sobrenome'] . '</td>
                                <td> ' . $cliente['email'] . '</td>
                                <td> ' . $cliente['idade'] . '</td>
                                <td><a href="editar.php?id=' . $cliente['id'] . '" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                                <td><a href="#modal'.$cliente['id'].'" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                                </tr>';

                                echo 
                                '<div id="modal'. $cliente['id']. '" class="modal content">
                                  <div class="modal-content">
                                    <h4>Opa!</h4>
                                    <p>Tem certeza que deseja excluir esse cliente?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <form action="php_action/delete.php" method="POST">
                                        <input type="hidden" name="id" value="'.$cliente['id'].'"></input>
                                        <button type="submit" name="btn-deletar" class="btn red">SIM, QUERO DELETAR</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>
                                  </div>
                                </div>';
                            endwhile;
                            mysqli_close($connect);
                        else:
                            echo 
                            "<tr>
                                <td>-</td> 
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>";
                        endif;
                    ?>
                </tbody>
            </table>
            <br>
            <a href="cadastrar_cliente.php" class="btn">Adicionar cliente</a>
        </div>
    </div>

<!-- Footer -->
<?php
    include_once 'includes/footer.php';
?>