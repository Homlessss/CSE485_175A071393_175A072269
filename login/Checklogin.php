<?php
    require '../db/connect.php';
    if(isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $_SESSION["user"]="";

        if(!$conn){
            die('co loi xay ra'.mysqli_connect_error() );
        }

        else{
            $sql = " SELECT * FROM users where '$user' = user and '$pass' = Pass  ";
            mysqli_set_charset($conn,'UTF8');
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    if($row['Admin']=='1'){
                        header("location:adminpage.php");
                    } 
                    else{
                        header("location:project.php");
                    }   
                }
            }
            else{
                header("location:login.php");
            }
        }
    }
?>