<?php include('header.php'); ?>
<div class="container">
<hr>
<h3>Filosofia</h3>
<?php
include_once('./config/Sql.php');

 
   
 $busca = "select * from livros where genero = 'filosofia' ";
 $resultbusca=mysqli_query($conn,$busca);
 while($row = mysqli_fetch_array($resultbusca)){ 
                echo"    
                <div id='espaco-livro' class='col-2' style='display: inline-block'>
                      <div class='row'><img src='img/capas/filosofia/".$row['imagem']."' alt=''></div>
                      <div class='row'><strong>".$row['titulo']."</strong><br></div>
                      <div class='row'><i>".$row['autor']."</i></div>
                      <div class='row'><b>R$".$row['preco'],',00'."</b></div>
                      <div class='row'><button id='btn-carrinho' class='btn btn-warning'>Comprar</button></div>
                    </div>";  
            
                }
?>
</div>



<?php include('footer.php') ?>