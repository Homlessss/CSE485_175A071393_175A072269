<?php
    require '../db/connect.php';
    session_start();
    if(isset($_POST['submit'])) {
        $id_baiviet = POST['ArticleID'];
        $tieude = POST['Title'];
        $noidung = POST['Content'];
        $anh = POST['image'];
        
        if(!$conn){
            die('co loi xay ra'.mysqli_connect_error() );
        }
        else{ 
            $sql = "UPDATE 'articles' ('tieude', 'noidung', 'anh') VALUE ('$tieude','$noidung','$anh') WHERE 'id_baiviet' = '$id_baiviet' ";
            mysqli_set_charset($conn,'UTF8');
            if(!mysqli_query($conn,$sql)){
                echo'Thất bại';
            }
            else{
                header("location:adminpage.php");
                echo 'Thành công';
            }
        }
    }
?>