<?php

$user = $_POST['user'];
$pass = $_POST['pass'];



$conn = mysqli_connect('localhost','root','','users');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );

}

else{

    $sql = " SELECT * FROM userss where '$user' = Email and '$pass' = Pass  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
         
                if($row['Admin']=='1'){
                       
                       header("location:btl.php");

                } 
         
        }
        }



}



?>