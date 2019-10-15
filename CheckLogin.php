<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];


$_SESSION["Email"]="";
$conn = mysqli_connect('localhost','root','','userr');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );

}

else{

    $sql = " SELECT * FROM user where '$user' = Email and '$pass' = Pass  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
         
                if($row['Admin']=='1'){
                       
                       session_start();
                    //    session_register("Email");
                       $_SESSION["Email"]=$user;
                       header("location:padmin.php");
                }else{
                    header("Location:admin.php");
                }
                 
         
        }
        }
        else{
            header("location:admin.php");

        }



}



?>