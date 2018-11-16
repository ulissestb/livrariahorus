<?php
include('header-acesso.html');
?>

<div class="container">
    <h3>Área Restrita</h3>
    <form method="post" action="acesso-admin.php">
        <label for="login">CPF do Administrador :</label>
        <input type="text" name="cpf" class="form-control"/>
        <label for="senha">Senha do Administrador</label>
        <input type=password name="senha" class="form-control"><br>
        
        <input type="submit" value="Entrar"  class="btn btn-warning">
    </form>
</div>


<?php
include('footer-admin.html');

?>