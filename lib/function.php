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

function pagiantion($page, $limit, $total_page, $url){    
    if(strpos($url,"?")){
        $tmp_url = $url."&";
    }else{
        $tmp_url = $url."?";
    }
    $html = '<div class="pagination">';    
    if ($page > 1) {
        $prev_page =$page - 1;
        $html.= '<a class="page-item" href="'.$tmp_url.'limit='.$limit.'&page='.$prev_page.'"><i class="fas fa-angle-left"></i></a>';
    }
    for ($num = 1; $num <= $total_page; $num ++){
        if ($num != $page) { 
            if($num > $page - 3 && $num < $page + 3){
                $html.= '<a class="page-item" href="'.$tmp_url.'&limit='.$limit.'&page='.$num.'">'.$num.'</a>';        
            }
        }else{
            $html.= '<strong class= "current-page page-item">'.$num.'</strong>';
        }    
    }
    if($page > 0 && $page < $total_page){
        $next_page =$page + 1;
        $html.= '<a class="page-item" href="'.$tmp_url.'limit='.$limit.'&page='.$next_page.'"><i class="fas fa-angle-right"></i></a>';
    }

    $html.= '</div>';

    return $html;
}

function print_product_item($product=[]){
    $html = '<div class="container-product">';
    $html.= '<img src="'. DOMAIN.'/public/upload/product/'.$product['img'].'" alt="" class="container-img">';
    $html.= '<h4 class="container-product-heading">'.$product['prd_name'].'</h4>';
    $html.= '<div class="price-wrap">';
    $html.= '<span class="price">'.number_format($product['price'], 0, ',', '.').' ₫</span>';
    if ( $product['discount'] > 0 ){
    $html.= '<span class="price-old">'.number_format($product['price_old'], 0, ',', '.').' ₫</span>';
    }else{
    }
    $html.= '</div>';
    $html.= '<button class="cart-product" onclick="addCart('.$product['id'].')" >';
    $html.= '<a class="form-link" href="">';
    $html.= '<i class="fas fa-shopping-cart"></i>';
    $html.= '<span class="cart-note">THÊM VÀO GIỎ</span>';
    $html.=  '</a>';
    $html.= '</button>';
        if ( $product['hot'] == 1 ){
            $html.= '<div class="product-hot">';
            $html.= '<i class="fas fa-check"></i>';
            $html.= 'HOT';
            $html.= '</div>';

        }else{
        }
        if ( $product['discount'] > 0 ){
            $html.= '<div class="product-sale">';
            $html.= '<span class="product-sale-number"> '.$product['discount'].' %</span>';
                $html.= '<span class="product-sale-label">GIẢM</span>';
                $html.= '</div>';

        }else{
        }
        $html.= '</div>';

        return $html;

}
