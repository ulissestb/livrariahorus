<?php

include('Sql.php');

$nomeDoLivro = $_POST['nomedolivro'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$dataLivro = $_POST['datalivro'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];



$insert = "INSERT INTO livro(autor, nomelivro, descricao, anolivro,editora, preco) VALUES ('{$autor}','{$nomeDoLivro}','{$descricao}','{$dataLivro}','{$editora}','{$preco}')";

mysqli_query($conn, $insert);

mysqli_close($conn);

$dados = array(
    'Nome do Livro'=>$nomeDoLivro,
    'Autor'=>$autor,
    'Editora'=>$editora,
    'Data do Livro'=>$dataLivro,
    'Preço'=>$preco,
    'Descrição'=>$descricao
);

echo json_encode($dados);