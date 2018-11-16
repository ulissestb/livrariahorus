<?php



$nomedolivro = $_POST['nomedolivro'];
$autor    = $_POST['autor'];
$editora  = $_POST['editora'];
$anolivro = $_POST['anolivro'];
$preco    = $_POST['preco'];
$genero   = $_POST['genero'];
$descricao = $_POST['descricao'];
$imagem = $_FILES['imagem']['name'];


include('Sql.php');


$inser = "INSERT INTO livros(genero, editora, titulo, autor, preco, descricao, anoLivro, imagem)
 VALUES ('{$genero}','{$editora}','{$nomedolivro}','{$autor}','{$preco}','{$descricao}', '{$anolivro}', '{$imagem}')";

mysqli_query($conn, $inser);

mysqli_close($conn);

?>


      <meta http-equiv="refresh" content="0.2; http://localhost/livrariahorus/horus/admin/admin_adicionarlivros.php">
