<?php
    session_start();
    
    require '../db/connect.php';
    if(isset($_POST['submit'])) {
        $tieude = $_POST['Title'];
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
                echo 'Thành công';
            }
        }
    }
?>