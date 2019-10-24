
<!doctype html>
<?php  
  session_start();
    
if(!isset($_SESSION['Email'])){
  header("Location:admin.php");
}


?>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stylelg.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
           
    



            <div class="container">

<div class="logo">
    <img src="img/logo_ntt.png" alt="">
</div>


<div class="bg">
<div class="main">
<form action="signup.php" method="POST" >
            Tên :</br><input style=" border-radius: 10px" type="text" name="Ten" ></br>
            Họ :</br> <input style=" border-radius: 10px" type="text" name= "Ho" ></br>
            Email :</br><input style=" border-radius: 10px" type="text" name="Email" ></br>
            Pass :</br> <input style=" border-radius: 10px" type="password" name="Password"></br></br>
               <input style=" border-radius: 10px" type="submit" value="đăng kí" >  </br>
            <!--  <a href="dangxuat.php">đăng xuất</a> -->        
            </form>
            <form action="dangxuat.php">
            <input style=" border-radius: 10px" type="submit" value="Đăng Xuất" >  
            </form>
            <form action="thembai.php">
            <input style=" border-radius: 10px" type="submit" value="Thêm Bài" >  
            </form>
            <form action="timbai.php">
            <input style=" border-radius: 10px" type="submit" value="Tìm" >  
            </form>


</div>

</div>




</div>





















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>