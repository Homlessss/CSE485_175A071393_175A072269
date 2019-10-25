<?php
    session_start();
    $Ten = $_POST['Ten']
    $email = $_POST['email']
    $pass = $_POST['pass']
    $admin = $_POST['admin']
    require 'db\connect.php';
    if(!$conn){
        die('cant connect' .mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO `users` ('Ten','email','pass','admin') 
        Value('$Ten','$email','$pass',0)";
        mysqli_set_charset($conn,'UFT8');

        if($result = mysqli_query($conn,$sql)){
            echo'failed';

        }
        else{
            header("location:admin.php");
        }
    }  
?>