<?php

include('Sql.php');

$dados = "INSERT INTO cliente(usuario, email, telefone, nome, senha, datanascimento) VALUES('{$user}','{$email}','{$celular}','{$nomecompleto}','{$senhamd5}','{$datanascimento}')";
    
mysqli_query($conn,$dados); 

mysqli_close($conn);
?>
<?php
session_start();

include ('Sql.php');

if(isset())

?>


