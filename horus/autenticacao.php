 
<?php
session_start();

    $user           = $_POST['user'];
    $password        = md5($_POST['password']);
    
    
   include('./config/Sql.php');
   
   $play = "select * from cliente where usuario = '".$user."'AND senha = '".$password."'";
   
    
$result = mysqli_query($conn, $play); 


 

if(mysqli_num_rows($result) == 1){
     //echo"logado";
    $row= mysqli_fetch_array($result);
    $_SESSION["usuario"] = $row["usuario"];
    header('location:index.php');
 } else {
     $msg="login/senha invalidos";
    header('location:index.php'.$msg);
}



///if(isset($_SESSION["user"])){
 //   header("location:index.php");
//}


mysqli_close($conn);


?>


<br>
<a href="index.php">Painel do Sistema</a>



