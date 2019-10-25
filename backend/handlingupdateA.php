<?php
    session_start();
    $id_baiviet = POST['ArticleID'];
    $tieude = POST['Title'];
    $noidung = POST['Content'];
    $anh = POST['image'];
    require 'db\connect.php';

    if(!$conn){
        die('co loi xay ra'.mysqli_connect_error() );
    }
    else{ 
        $sql = "UPDATE 'articles' ('tieude', 'noidung', 'anh') VALUE ('$tieude','$noidung','$anh') WHERE 'id_baiviet' = '$id_baiviet' "
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