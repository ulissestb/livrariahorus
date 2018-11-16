<?php include('header.php') ?>

<!-- inicio codigo espaco-livro by: Pedrin -->

<div class="container">
<h3>Todas as Categorias</h3>
       <?php
    
                include_once 'config/Sql.php';
                $busca = "select * from livros";
                $resultbusca=mysqli_query($conn,$busca);
                while($row = mysqli_fetch_array($resultbusca)){
                echo" <div id='espaco-livro' class='col-2' style='display: inline-block'>
                      <div class='row'><img src='img/capas/todasfotos/".$row['imagem']."' alt=''></div>
                      <div class='row'><strong>".$row['titulo']."</strong><br></div>
                      <div class='row'>".$row['autor']."</div>
                      <div class='row'><b>R$".$row['preco'],',00'."</b></div>
                      <div class='row'><button id='btn-carrinho' class='btn btn-warning'>Comprar</button></div>
                    </div>";  
                }

        ?>
</div>
  <!--Código do Rodapé -->

<?php include('footer.php') ?>
  <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel();
            });
    </script>
