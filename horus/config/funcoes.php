<?php
include('Sql.php');

// Função para tratar o nome, deixar a primeira letra do nome maiscula ex: Ulisses
function trataNome($nome){
    ucfirst($nome);
    return $nome;
}


// Função para tratar o email, deixar todos minusculos. ex : ulissesmelo@gmail.com
function trataEmail($email){
    ucwords($email);
    return $email;
}


//Função para Verificar se já existe Usuário no Banco de dados
function verifcalogin($login){
    include('Sql.php');
    $queryLogin = "SELECT * FROM cliente WHERE usuario='{$login}'";
    $result = mysqli_query($conn, $queryLogin);
    if(mysqli_num_rows($result) != 0 ) {
        echo "<script>alert('Esse usuário já existe.');'";
    }
    mysqli_close($conn);
}

//Função para Verificar se as senhas correspondem
function verificarSenha($pass, $confpass){
    if ($pass != $confpass){
    echo "<script>alert('senhas não conferem.');";
   }else{
    $confpass = md5($pass);
    }

}
