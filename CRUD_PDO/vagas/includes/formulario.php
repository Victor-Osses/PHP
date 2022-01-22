

<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success"> Voltar </button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post" class="mt-3">
        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name="titulo" value="<?php echo $obVaga->titulo ?>">
        </div>

        <div class="form-group mt-3">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" rows=5><?php echo $obVaga->descricao ?></textarea>
        </div>

        <div class="form-group mt-3">
            <label>Status</label>

            <div>
                <div class="form-check form-check-inline mt-2">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline mt-2">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?php echo $obVaga->ativo == 'n' ? 'checked' : '' ?>> Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>


    </form>
</main>