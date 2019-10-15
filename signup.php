<?php
 session_start();
$Ten = $_POST['Ten'];
$Ho = $_POST['Ho'];
$Email = $_POST['Email'];
$Passw = $_POST['Password'];

$conn = mysqli_connect('localhost','root','','userr');

if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );

}
else{
    
    $sql = " INSERT INTO `user`(`Ho`, `Ten`, `Email`, `Pass`, `Admin`, `Code`) VALUES ('$Ho','$Ten','$Email','$Passw',1,null) ";
    mysqli_set_charset($conn,'UTF8');
   if(!$result = mysqli_query($conn,$sql)){
                  echo'that bai';
                alert('thatbai');

   }
   else{
       header("location:padmin.php");
   }
    }
?>