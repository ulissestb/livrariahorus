<?php

$nomecompleto     = $_POST['nomecompleto'];
$user             = $_POST['user'];
$datanascimento   = $_POST['datanascimento'];
$celular          = $_POST['celular'];
$senha            = $_POST['senha'];
$confisenha       = $_POST['confisenha'];
$email            = $_POST['email'];



include('funcoes.php');

//Funções de verificação
verifcalogin($user);
verificarSenha($senha, $confisenha);

$senhamd5 = md5($confisenha);


$queryUser = "SELECT * FROM cliente WHERE usuario = '{$user}'";
$resultUser = mysqli_query($conn, $queryUser);

if(mysqli_num_rows($resultUser) == 0){
    include('Sql.php');

    $dados = "INSERT INTO cliente(usuario, email, telefone, nome, senha, datanascimento) VALUES('{$user}','{$email}','{$celular}','{$nomecompleto}','{$senhamd5}','{$datanascimento}')";

    mysqli_query($conn,$dados);

    mysqli_close($conn);

    echo "<script>alert('Cadastro feito com sucesso!')</script>";

}

?>
<meta http-equiv="refresh" content="0.2; http://localhost/livrariahorus/horus/">
