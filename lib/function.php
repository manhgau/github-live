<?php
function debug($var, $var_dump=false){
    echo '<xmp>';
    if($var_dump){
        var_dump($var);
    }else{
        print_r($var);
    }
    echo '</xmp>';    
}
//kiểm tra login hay chưa

function check_login(){
    $user_id = isset($_SESSION['user_id'])?(int)$_SESSION['user_id']:0;
    if($user_id > 0){
        return true;
    }else{
        return false;
    }
}

function is_admin(){
    $is_admin = isset($_SESSION['ad_id'])?(int)$_SESSION['ad_id']:0;   
    if(check_login() && $is_admin==1){
        return true;
    }else{
        return false;
    }
}

function hash_password($password, $salt){
    return md5($salt."_".$password);
}


function redirect($url){
    header('location:'.$url.'');
    exit();
}

function build_layout_url($layout,$is_admin = false){    
    if($is_admin == true){    
        return DOMAIN."/index.php?url=".$layout."";
    }else{    
        return DOMAIN."/index.php?url=".$layout."";
    }
}

function build_css_url($file){    
    return DOMAIN. "/public/css/".$file."";
}
