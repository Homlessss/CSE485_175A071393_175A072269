<?php
//quy trinh 5 bước
//bước 1 
//tạo biến conn để check kết nói đc ko (1-0,t-f)
 $conn = mysqli_connect('localhost','https://btlwebtechonology.000webhostapp.com/admin.php','Mkhai2308','id11247705_btlwebtechnology');
 // sử lý lỗi
 if(!$conn){
     // câu lệnh bắt lỗi
     die('co loi xay ra'.mysqli_connect_error() );
 } 
 else{
     echo ' khong co loi' ;
 $sql = " SELECT * FROM customers";
 mysqli_set_charset($conn,'UTF8');
 $result = mysqli_query($conn,$sql);
 // bước 4 lay ra danh sach
 if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>' ;

        echo '<td>'.$row['FirstName'].'</td><td> '.$row['LastName'].'</td>';
        echo '</tr>';
    }
    }
 }
 mysqli_close($conn);
     ?>