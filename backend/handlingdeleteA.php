<?php
    session_start();
    $tieude = POST['Title'];
    require 'db\connect.php';

    if(!$conn){
        die('co loi xay ra'.mysqli_connect_error() );
    }
    else{ 
        $sql = "DELETE FROM 'articles' WHERE 'tieude' = $tieude";
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