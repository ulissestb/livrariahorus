<?php include('header.html'); ?>
    <div class="container">


   
   <!--  AQUI COMEÇA MEU CODIGO BY; NILO-->
   <?php
     if(isset($_get["login"])&& $_get["login"]==1){?>
     <p class="alert-success">logado com sucesso!</p>
   <?php }?>
   <?php 
     if(isset($_get["login"])&& $_get["login"]==0){?>       
     <p  class="alert-danger">Usuário ou senha inválida!</p>
    <?php }?>   
     
   
   <div style="margin: 100px; margin-top: 0px;">
    <h3>Página de Login</h3>
    <form clas="form-group" method="post" action="autenticacao.php">
        <label>Login:</label><br>
        <input type="text" name="nome" placeholder="Ex. Nilo" class="form-control">
        <label>Senha:</label>
        <input type="password" name="password" class="form-control"><br><br>
        <input type="submit" class="btn btn-success" value="Entrar">
    </form>

</div>
</div>


<?php include('footer.html') ?>







