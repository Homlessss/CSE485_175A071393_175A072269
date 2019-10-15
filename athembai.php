<?php
 session_start();
$td = $_POST['tieuDe'];
$h = $_POST['noiDung'];
$a =$_POST['anh'];

$conn = mysqli_connect('localhost','root','','userr');

if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );

}
else{
    
    $sql = " INSERT INTO `bai_viet`(`mabv`, `tieude`, `noidung`, `anh`) VALUES ('','$td','$h','$a') ";
    mysqli_set_charset($conn,'UTF8');
   if(!$result = mysqli_query($conn,$sql)){
                  echo'that bai';
                  echo $a ;
              

   }
   else{
       header("location:padmin.php");
   }
    }
?>