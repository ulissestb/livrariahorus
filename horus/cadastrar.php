<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>  
<body>
<div id="total">
    <header id="logcad">
        <div id="cabecalho">
            <div id="login">
                <a href="login.php">Entrar  |</a>
                <a href="cadastrar.php">Cadastrar</a>
            </div>

            <h1>Livraria Horus</h1>
        </div>
    </header>
    

    <!--BARRA DE NAVEGAÇÃO -->
    <nav id="navbar" class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Horus</a>
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="#">Livros</a>
    <a class="navbar-brand" href="#">Quem somos</a>
    <a class="navbar-brand" href="#">Localização</a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-warning my-2 my-sm-0" type="submit">Procurar</button>
    </form>
    </nav>
    <!--FIM DA BARRA DE NAVEGAÇÃO-->
    
    
<div id="cadastro" style="margin: 100px; margin-top: 0px;">
    <form class="form-group" action="php.php" method="post">
        <h3>Cadastro</h3>
        <div class="container">
            <div class="row">
               
            <div class="col-md-6">
            Nome<br>
            <input type="text" class="form-control" name="nome"><br>
          
            </div>
            <div class="col-md-6">
            Sobrenome<br>
            <input type="text" class="form-control" name="sobrenome"><br>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">     
            Data de Nascimento<br>
            <input type="date" class="form-control" name="datanascimento"><br>
            </div>
            <div class="col-md-6">  
            Celular<br>
            <input type="number" class="form-control" name="celular"><br>
           </div>
            </div>
            Email<br>
            <input type="email" class="form-control" name="email"><br>

            <input type="checkbox">  Li e concordo. <br>
            <input type="checkbox" >  Receber novidades por e-mail.<br><br>
            <input type="submit" value="Cadastrar" class="btn btn-warning" id="butao">
        </div>
    </form>
</div>

    
    

<!--Código do Rodapé -->



</div>
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
</body>
</html>

<?php 
$conn= mysql_connect("localhost","root","","livrariahorus");

?>