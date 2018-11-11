<?php include('header.html'); ?>
    <div class="container">


   
   <!--  AQUI COMEÇA MEU CODIGO BY; NILO-->

     
   
   <div style="margin: 100px; margin-top: 0px;">
    <h3>Página de Login</h3>
    <form clas="form-group" method="post" action="autenticacao.php">
        <label>Login:</label><br>
        <input type="text" name="user" placeholder="Ex. Nilo" class="form-control" required>
        <label>Senha:</label>
        <input type="password" name="password" class="form-control"required><br><br>
        <input type="submit" class="btn btn-success" value="Entrar">
    </form>

</div>
</div>


<?php include('footer.php') ?>







