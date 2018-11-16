
<?php
session_start();

    $user           = $_POST['user'];
    $password        = md5($_POST['password']);


   include('./config/Sql.php');

   $play = "select * from cliente where usuario = '".$user."'AND senha = '".$password."'";


$result = mysqli_query($conn, $play);




if(mysqli_num_rows($result) == 1){
    $row= mysqli_fetch_array($result);
    $_SESSION["user"] = $row["usuario"];
    header('location:index.php');
 } else {
     $msg="login/senha invalidos";
    header('location:index.php');
}



///if(isset($_SESSION["user"])){
 //   echo <>var login = document.getElementById('login');
//             login = setStyle(display: none)        <>
//}


mysqli_close($conn);


?>
