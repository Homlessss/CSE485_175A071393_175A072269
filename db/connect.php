<?php 
    $db = array {
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => 'webtechnology',
    };

    $conn = mysqli_connect($db['server'], $db['username'], $db['password'], $db['dbname']);

    if(!$conn){
        die('Kết nối thất bại'.mysqli_connect_error($conn));
    }
?>