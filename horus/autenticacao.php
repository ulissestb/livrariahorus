 
<?php
    $nome           = $_POST['nome'];
    $password        = $_POST['password'];
    
   include('Sql.php');                              

    $usuario = "INSERT INTO usuario(use,password ) VALUES( '{$nome}','{$password}')";
    
mysqli_query($conn,$usuario); 

mysqli_close($conn);



           ?>
<?php

function buscaUsuario($nome, $password){
    $passwordMd5 = md5 ($password);
    $quaery= "select * fron usuario where nome='{$nome}' password='{$password}'";
    $resultado = myqli_query($quary);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

?>
<br>
<a href="login.php">Painel do Sistema</a>

     

