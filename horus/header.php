<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/inputMask.js"></script>
    <script src="js/mascaraTelefone.js"></script>
    <script src="js/owl.carousel.min.js"></script>



    <title>Livraria Horus</title>
</head>
<body>


    <header id="logcad">
        <div id="cabecalho">

          <?php
          session_start();
              if($_SESSION){
                $styleLogin = 'none';
                $styleLogado = 'block';
              }else{
                $styleLogin = 'block';
                $styleLogado = 'none';
              }
          ?>



            <!-- MUDAR DISPLAY DO LOGIN PARA LOGADO, PARA SUMIR E APARECER-->
            <div id="login" style="display:<?php echo $styleLogin; ?>" >
                <a href="" data-toggle="modal" data-target="#exampleModal"><i class="far fa-user" ></i> Login | </a>
                <a href="cadastrar.php">Cadastrar</a>
            </div>
            <div id="logado" style="display: <?php echo $styleLogado; ?>">
                <a href="#"><i class="far fa-user" ></i> Bem-vindo <?php echo $_SESSION["user"]?> </a>
            </div>

            <div id="logo">
            <img src="img/LogoLivraria.png" alt="">
            </div>

                </div>
        </header>


    <!--BARRA DE NAVEGAÇÃO -->
    <nav id="navbar" class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="img/nav1.png" alt="" style="width: 40px; height: 40px;">Horus</a>


<!--  DropDown de Livros separados por Gêneros-->
    <div class="dropdown show">
      <a class="navbar-brand" href="livros.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Livros
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="esoterismo.php">Esoterismo</a>
        <a class="dropdown-item" href="filosofia.php">Filosofia</a>
        <a class="dropdown-item" href="psicologia.php">Psicologia</a>
        <a class="dropdown-item" href="religiao.php">Religião</a>
        <a class="dropdown-item" href="livros.php">Todos os livros</a>

      </div>
  </div>
<!-- Fim do DropDown dos livros -->



    <a class="navbar-brand" href="contato.php">Contato</a>

    <form class="form-inline my-2 my-lg-0" action="busca.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquise Aqui" aria-label="Search">
      <button class="btn btn-warning my-2 my-sm-0" type="submit">Procurar</button>
    </form>
    </nav>
    <!--FIM DA BARRA DE NAVEGAÇÃO-->


  <!-- Modal pagina login -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form clas="form-group" method="post" action="autenticacao.php">
      <div class="modal-body">



        <label for='user'>Login:</label><br>
            <input type="text" name="user" placeholder="Ex. Nilo" class="form-control" required>
        <label for >Senha:</label>
        <input type="password" name="password" class="form-control"required><br><br>




      </div>
      <div class="modal-footer">

        <input type="submit" class="btn btn-success" value="Entrar">
      </div>
      </form>
    </div>
  </div>
</div>
