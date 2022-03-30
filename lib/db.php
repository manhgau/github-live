<?php    
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($connect){
        mysqli_query($connect,"SET NAMES 'UTF8'");
    }else{
        echo 'kết nối thất bại';
    }
?>