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
        <h3>Adicionar Livros ao Banco</h3>
        <form action="config/adiciona.php" method="post">

            <div class="form-group">

                <div class="row">
                    <div class="col">
                        Nome do Livro:<br>
                        <input type="text" class="form-control" name="nomedolivro" id="nomelivro">
                    </div>
                
                    <div class="col">
                        Autor:<br>
                        <input type="text" class="form-control" name="autor" id="autor">
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        Editora:<br>
                        <input type="text" class="form-control" name="editora" id="editora">
                    </div>
                
                    <div class="col">
                        Ano do Livro:</br>
                        <input type="date" class="form-control" name="datalivro" id="datalivro">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Preço:</label><br>
                        <input type="number" class="form-control" name="preco" id="preco"> 
                    </div>
                    <div class="col">
                        <label>Gênero:</label></br>
                        <select class="form-control">
                            <option>Administração</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    Descrição:<br>
                    <textarea class="form-control" name="descricao" id="descricao">
                    
                    </textarea>
                </div>
                
                <div id="cadastrar">
                <input type="submit" class="btn btn-warning" value="Cadastrar" id="btncadastrar" >
                </div>
            </div>
        </form>

    </div>
        
     </div>
</body>
</html>