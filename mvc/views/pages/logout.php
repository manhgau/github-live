<?php    
    if (isset($_POST)){
        //Xóa session
        if(isset($_SESSION['user_id'])){
            unset($_SESSION['user_id']);
            unset($_SESSION['ad_id']);            
        }  
        if(isset($_SESSION['name'])){
            unset($_SESSION['name']);
        }   
    }
    redirect(DOMAIN);
?>