<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap.js"></script>
    <title>Livraria Horus</title>
</head>
<body>
<div id="total">
    <header id="logcad">
        <div id="cabecalho">
            <div id="login">
                <a href="login.php">Entrar  |</a>
                <a href="cadastro.php">Cadastrar</a>
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

    <div class="container">


   
   <!--  AQUI COMEÇA MEU CODIGO BY; NILO-->
   
   <div style="margin: 100px; margin-top: 0px;">
    <h3>Página de Login</h3>
    <form clas="form-group" method="post" action="autenticacao.php">
        <label>Login:</label><br>
        <input type="text" placeholder="Ex. Nilo" class="form-control">
        <label>Senha:</label>
        <input type="password" class="form-control"><br><br>
        <input type="submit" class="btn btn-success" value="Entrar">
    </form>

</div>








