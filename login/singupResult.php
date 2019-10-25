<?php
    session_start();
    require '../db/connect.php';
    if(isset($_POST['submit'])) {
        $Ten = $_POST['Ten'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $admin = $_POST['admin'];    
        
        if(!$conn){
            die('cant connect' .mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO `users` ('name','email','pass','admin') 
            Value('$Ten','$email','$pass',0)";
            mysqli_set_charset($conn,'UFT8');

            if(!$result = mysqli_query($conn,$sql)){
                echo'failed';

            }
            else{
                header("location:admin.php");
            }
        } 
    } 
?>
