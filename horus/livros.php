<?php include('header.php') ?>

<!-- inicio codigo espaco-livro by: Pedrin -->

<div class="container">


<!-- PSICOLOGIA -->

  <div>
<h3>Psicologia</h3>
    <div class="owl-carousel owl-theme">
      <ol class="books-grid">
            <?php
                include_once 'config/Sql.php';
                $sql = "SELECT * FROM livros";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<li class='book' id='espaco-livro'>";
                    echo $row['imagem']."<br>";
                    echo "<strong>".$row['titulo']."</strong><br>";
                    echo $row['autor']."<br>";
                    echo "<b>".$row['preco']."</b><br>";
                    echo "<button id='btn-carrinho' class='btn btn-warning'>Comprar</button><br>";
                    echo "</li>";
                }
            ?>
      </ol>
    </div>



<!-- FILOSOFIA -->

<div>
  <h3>Filosofia</h3>
    <div class="owl-carousel owl-theme">
      <div id="espaco-livro">
        <img src="img/filosofia/61261.jpg">
        <strong>O ser e o nada</strong><br>
        Jean Paul Sartre<br>
        <b>R$40,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/filosofia/66937.jpg">
        <strong>As tecnologias da inteligência</strong><br>
        Pierre Lévy<br>
        <b>R$47,99</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/filosofia/84542.jpg">
        <strong>A metamorfose</strong><br>
        Franz Kafka<br>
        <b>R$60,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/filosofia/85573.jpg">
        <strong>A sociedade do espetáculo</strong><br>
        Debord<br>
        <b>R$57,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/filosofia/392359.jpg">
        <strong>Memórias do Subsolo</strong><br>
        Fiodor<br>
        <b>R$54,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/filosofia/1337514.jpg">
        <strong>Não nascemos prontos</strong>
        Mario Sergio Cortella<br>
        <b>R$40,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/psicologia/1377081.jpg">
        <strong>Sobre a brevidade da vida</strong><br>
        Sêneca<br>
        <b>R$45,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

    </div>


<!-- RELIGIÃO -->

  <div>
  <h3>Religião</h3>
    <div class="owl-carousel owl-theme">
      <div id="espaco-livro">
        <img src="img/religiao/46351654.jpg">
        <strong>Todo mundo tem um anjo da guarda</strong><br>
        Pedro Siqueira<br>
        <b>R$67,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/religiao/42746445.jpg">
        <strong>A sabedoria da Transformação</strong><br>
        Monja Coen<br>
        <b>R$54,99</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/religiao/30140942.jpg">
        <strong>O cérebro de Buda</strong><br>
        Rick Hanson<br>
        <b>R$77,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/religiao/13098455.jpg">
        <strong>Violetas na janela</strong><br>
        Vera Lúcia Marinzeck<br>
        <b>R$60,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/religiao/11021676.jpg">
        <strong>Mente em conforto e sossego</strong><br>
        Dalai Lama<br>
        <b>R$45,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/religiao/11020909.jpg">
        <strong>As sete linhas de umbanda</strong><br>
        Rubens Saraceni<br>
        <b>R$69,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/religiao/11019979.jpg">
        <strong>O livro dos médiuns</strong><br>
        Allan Kardec<br>
        <b>R$20,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

    </div>


<!-- ESOTERISMO -->

<div>
  <h3>Esoterismo</h3>
    <div class="owl-carousel owl-theme">
      <div id="espaco-livro">
        <img src="img/esoterismo/2121286.jpg">
        <strong>Chakras</strong><br>
        Naomi Ozniee<br>
        <b>R$64,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/esoterismo/29002329.jpg">
        <strong>Guía de la españa misteriosa</strong><br>
        Pedro Amorós<br>
        <b>R$57,99</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/psicologia/65340.jpg">
        <strong>Usando Sua Mente</strong><br>
        Autor nome tal<br>
        <b>R$17,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/esoterismo/111696933.jpg">
        <strong>Prospettive di Esoterismo</strong><br>
        Rosario Castello<br>
        <b>R$85,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/esoterismo/111690835.jpg">
        <strong>Esoterismo Cristiano</strong><br>
        René Guénon<br>
        <b>R$55,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/esoterismo/29003312.jpg">
        <strong>tarot Gitano</strong><br>
         Yasna Romani<br>
        <b>R$59,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

      <div id="espaco-livro">
        <img src="img/esoterismo/2010275841.jpg">
        <strong>Esoterismo do Dante</strong><br>
        Rene<br>
        <b>R$17,00</b><br><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Adicionar ao carrinho</button><br><br>
        <button id="btn-carrinho" class="btn btn-warning">Comprar</button>
      </div>

    </div>


</div>



 </div>

  <!--Código do Rodapé -->

<?php include('footer.php') ?>
  <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel();
            });
    </script>
