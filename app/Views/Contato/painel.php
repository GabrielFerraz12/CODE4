
<h1> MENSAGEM ENVIADA </h1>
<hr>
<table cellpadding="2" cellspacing="2" border="1">
    <tr>
        <td>Nome: </td>
        <td><?php echo $nome; ?></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td>Telefone: </td>
        <td><?php echo $telefone; ?></td>
    </tr>
    <tr>
        <td>Mensagem: </td>
        <td><?php echo $mensagem; ?></td>
    </tr>
</table>
<br>
<a class="btn_deletar" href="<?php echo base_url(); ?>contato/deletar"> Deletar </a>
<br><br>