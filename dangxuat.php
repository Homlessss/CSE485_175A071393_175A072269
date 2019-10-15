<?php
    session_start();
    $_SESSION["Email"]="";
    session_destroy();
    header("Location:admin.php");
   
?>