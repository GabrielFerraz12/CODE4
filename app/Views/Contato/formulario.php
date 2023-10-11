<div>
    <?php $validation = \Config\Services::validation(); ?>

    <form action="<?php echo base_url(); ?>contato/salvar" method="post">
        <div>
            <label> Nome </label>
            <input type="text" name="nome">
            <!-- VALIDAÇÃO DO CAMPO NOME -->
            <?php if ($validation->getError('nome')) { ?>
                <div>
                    <?= $error = $validation->getError('nome'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <label> Email </label>
            <input type="text" name="email">
            <!-- VALIDAÇÃO DO CAMPO EMAIL -->
            <?php if ($validation->getError('email')) { ?>
                <div>
                    <?= $error = $validation->getError('email'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <label> Telefone </label>
            <input type="text" name="telefone" maxlength="11">
            <!-- VALIDAÇÃO DO CAMPO TELEFONE -->
            <?php if ($validation->getError('telefone')) { ?>
                <div>
                    <?= $error = $validation->getError('telefone'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <label> Mensagem </label>
            <textarea name="mensagem"></textarea>
            <!-- VALIDAÇÃO DO CAMPO TELEFONE -->
            <?php if ($validation->getError('mensagem')) { ?>
                <div>
                    <?= $error = $validation->getError('mensagem'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <button type="submit"> SALVAR </button>
        </div>
    </form>
</div>