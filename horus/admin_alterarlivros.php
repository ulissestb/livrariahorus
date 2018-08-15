<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
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
    <a class="navbar-brand" href="#">Horus</a>
    <div class="dropdown show">
  <a class="navbar-brand" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Livros
  </a>

  <div class="dropdown-menu"  id="dropdown" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" id="dropdown" href="admin_adicionarlivros.php">Adicionar</a>
    <a class="dropdown-item" id="dropdown" href="admin_alterarlivros.php">Alterar</a>
    <a class="dropdown-item" id="dropdown" href="#">Remover</a>
  </div>
</div>
  
    <a class="navbar-brand" href="#">Clientes</a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-warning my-2 my-sm-0" type="submit">Procurar</button>
    </form>
    </nav>
    <!--FIM DA BARRA DE NAVEGAÇÃO-->


    <div class="container">
        
           <h1>será feito uma lista aqui </h1>

    </div>
        
     </div>
</body>
</html>