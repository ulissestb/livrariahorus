<?php
$nome           = $_POST['nome'];
$sobrenome      = $_POST['sobrenome'];
$datanascimento = $_POST['datanascimento'];
$celular        = $_POST['celular'];
$email          = $_POST['email'];

$nomeTodo = $nome ." ". $sobrenome;

include('Sql.php');

$dados = "INSERT INTO cliente(telefone, nome ,data, email) VALUES ('{$celular}','{$nomeTodo}','{$datanascimento}','{$email}')";
    
mysqli_query($conn,$dados); 

mysqli_close($conn);
        
?>



<a href="../cadastrar.php">Voltar</a>
