
   <?php include('header.php') ?>
    
    <div class="container" >
        <div id="cadastro" style="margin: 100px; margin-top: 0px;">
            <form class="form-group" action="config/post.php" method="post">
                <h3>Cadastro</h3>
                <div class="container">
                    <div class="row">
                    
                    <div class="col-md-6">
                    Nome Completo<br>
                    <input type="text" class="form-control" name="nomecompleto"><br>
                
                    </div>
                    <div class="col-md-6">
                    Nome de Usuário<br>
                    <input type="text" class="form-control" name="user"><br>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">     
                    Data de Nascimento<br>
                    <input type="date" class="form-control" name="datanascimento"><br>
                    </div>
                    <div class="col-md-6">  
                    Celular<br>
                    <input type="text" class="form-control" name="celular" id="celular"><br>
                </div>
                    </div>
                    Email<br>
                    <input type="email" class="form-control" name="email"><br>
                    
                      <div class ="row">
                    <div class="col-md-6">
                    Senha<br>
                    <input type="password" class="form-control" name="senha"><br>
                    </div>
                    <div class="col-md-6">
                    Confirme a senha<br>
                    <input type="password" class="form-control" name="confisenha"><br>
                    </div>
                    </div>

                    <input type="checkbox">  Li e concordo. <br>
                    <input type="checkbox" >  Receber novidades por e-mail.<br><br>
                    <input type="submit" value="Cadastrar" class="btn btn-warning" id="butao">
                </div>
            </form>
        </div>

    </div>  
    

<!--Código do Rodapé -->
<?php include('footer.php')?>
