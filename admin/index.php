<?php
session_start();
include '../lib/config.php';
include '../lib/db.php';
include '../lib/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php1fpt/css/main.css">
    <title>Shopppppp</title>
</head>
<body>
    <?php        
    $layout = isset($_GET['layout'])??'danhsach';
    //check quyền admin
    if(!is_admin()){    
        redirect(DOMAIN);
    }

    if($layout){
        switch ($_GET['layout']) {
            case 'danhsach' :
                require_once 'pages/danhsach.php';
                break;
            case 'them' :
                require_once 'pages/them.php';
                break;
             case 'sua' :
                require_once 'pages/sua.php';
                break;
            case 'xoa' :
                require_once 'pages/xoa.php';
                break;
            case 'test' :
                require_once 'pages/test.php';
                break;
            default:
                require_once 'pages/danhsach.php';
                break;
        }
    }else{
        require_once 'pages/danhsach.php';
    }    
    ?>
</body>
</html>