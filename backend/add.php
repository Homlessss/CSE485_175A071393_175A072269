<?php
    session_start();

    require 'db\connect.php';

    $tieude = $_POST['Title'];
    $noidung = $_POST['Content'];
    $anh =$_POST['image'];

    if(!$conn){
        die('co loi xay ra'.mysqli_connect_error() );
    }
    else{ 
        $sql = " INSERT INTO `articles`(`id_baiviet`, `tieude`, `noidung`, `anh`) VALUES ('','$tieude','$noidung','$anh') ";
        mysqli_set_charset($conn,'UTF8');
        if(!mysqli_query($conn,$sql)){
            echo "Thất bại";
        }
        else{
            header("location:adminpage.php");
            echo "Thành công";
        }
    }
?>