<?php    
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($connect){
        mysqli_query($connect,"SET NAMES 'UTF8'");
    }else{
        echo 'kết nối thất bại';
    }

    // try {

    //     $connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME."", DB_USER, DB_PASSWORD);
    //     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // }
    
    // catch(PDOException $e) {
    
    //     $connect = null;
    //     echo "Connection failed: " . $e->getMessage();
    
    // }
?>