<?php
session_start();

If(!isset($_SESSION["user"] )){
    session_destroy();
    header("location:index.php");
    
}

?>