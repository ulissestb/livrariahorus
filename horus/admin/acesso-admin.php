<?php

session_start();

$cpf = $_POST["cpf"];
$senha = md5($_POST["senha"]);

$conn = mysqli_connect('localhost','root','','livrariahorus');


$sql = "SELECT * FROM funcionario WHERE
       cpf='".$cpf."' AND 
       senha='".$senha."'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    //echo "Logado!";
    $dados = mysqli_fetch_array($result);
    $_SESSION["nome"] = $dados["nome"];
    $_SESSION["perfil"] = $dados["perfil"];
    header("location:admin_index.php");
    
}else{
    $msg = "Login/senha inválidos";
    header("location: acesso.php?m=".$msg);
}







?>