<div>
    <?php $validation = \Config\Services::validation(); ?>

    <form action="<?php echo base_url(); ?>contato/cadastra_usuario" method="post">
        <div>
            <label> Usuario </label>
            <input type="text" name="usuario">
            <!-- VALIDAÇÃO DO CAMPO USUARIO -->
            <?php if ($validation->getError('usuario')) { ?>
                <div>
                    <?= $error = $validation->getError('usuario'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <label> Senha </label>
            <input type="text" name="senha">
            <!-- VALIDAÇÃO DO CAMPO SENHA -->
            <?php if ($validation->getError('senha')) { ?>
                <div>
                    <?= $error = $validation->getError('senha'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <label> Confirme sua Senha </label>
            <input type="text" name="confsenha">
            <!-- VALIDAÇÃO DO CAMPO CONFIRME SUA SENHA -->
            <?php if ($validation->getError('confsenha')) { ?>
                <div>
                    <?= $error = $validation->getError('confsenha'); ?>
                </div>
            <?php } ?>
        </div>

        <div>
            <button type="submit"> SALVAR </button>
        </div>
    </form>
</div>