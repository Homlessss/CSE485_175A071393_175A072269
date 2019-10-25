<!doctype html>
<html lang="en">
  <head>
    <title>Đại học Nguyễn Tất Thành - NTTU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <p style="font-size:30px"> <b>Bài đăng cần tìm là</b></p>
        <div class="row">
            <div class="col-md-3">
                <?php 
                    require '../db/connect.php';
                    if(isset($_POST['submit'])) {
                        $ArticleID = $_POST["ArticleID"];
                        $_SESSION["Email"]="";
                        if(!$conn){
                            die('cant connect'.mysql_connect_erro());
                        }
                        else{
                            $sql = "SELECT * FROM articles WHERE ArticleID = $ArticleID";
                            mysqli_set_charset($conn,'UFT8');
                            $result = mysqli_query($conn,$sql);
                            if(mysql_num_row($result)>0){
                                echo '<img src="img/'.$row['Img'].'">';
                            }
                            else{
                                echo ' SQL statement error';
                            }
                        }
                    }
                ?>
            </div>
            <div class="col-md-9">
                <?php 
                    require '../db/connect.php';
                    if(isset($_POST['submit'])) {
                        $ArticleIDD = $_POST["ArticleID"];
                        $_SESSION["Email"]="";                       
                        if(!$conn){
                            die('cant connect'.mysqli_connect_error());
                        }
                        else{
                            $sql = "SELECT * FROM articles WHERE ArticleID = $ArticleIDD";
                            mysqli_set_charset($conn,'UFT8');
                            $result = mysqli_query($conn<$sql);
                            if (mysql_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo'<p class="title" style="font-size:30px">'.$row['Title'].'</p><br>'.$row['Content'];
                                }
                            }
                            else{
                                echo'SQL statement error';
                            }
                        }
                    }
                ?>
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