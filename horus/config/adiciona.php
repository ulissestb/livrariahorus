<?php



$nomedolivro = $_POST['nomedolivro'];
$autor    = $_POST['autor'];
$editora  = $_POST['editora'];
$anolivro = $_POST['anolivro'];
$preco    = $_POST['preco'];
$genero   = $_POST['genero'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];


include('Sql.php');


$inser = "INSERT INTO livros(genero, editora, titulo, autor, preco, descricao, anoLivro, imagem)
 VALUES ('{$genero}','{$editora}','{$nomedolivro}','{$autor}','{$preco}','{$descricao}', '{$anolivro}', '{$imagem}')";

mysqli_query($conn, $inser);

mysqli_close($conn);

echo "
    <script>alert('O livro foi adicionado com sucesso!');</script>
";

?>
<a href="../admin/admin_adicionarlivros.php">Adicionar mais Livros</a>
<a href="../index.php">Ir para menu</a>
<p class="alert-success">Adicionado com sucesso!</p>
<?php 



?>
