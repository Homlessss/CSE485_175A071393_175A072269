<?php
    session_start();
    $_SESSION["Email"]="";
    session_destroy();
    header('location:index.php');
?>