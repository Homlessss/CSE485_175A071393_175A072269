<?php

    $name = 'Mai Quang Khải';
    $email = 'mkhai2308@gmail.com';
    $password = '123456';
    $admin = '1';
    $conn = mysqli_connect('localhost','root','','webtechnology');

    if(!$conn){
        die('co loi xay ra'.mysqli_connect_error() );
    }
    else{ 
        $sql = " INSERT INTO `users`('id_user', 'name', 'email', 'password', 'admin' ) VALUES ('', '$name', '$email', '$password', '$admin' ) ";
        mysqli_set_charset($conn,'UTF8');
        if(!mysqli_query($conn,$sql)){
            echo'Thất bại';
        }
        else{
            header("location:adminpage.php");
            echo 'Thành công'
        }
    }
?>