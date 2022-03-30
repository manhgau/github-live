<ul class="sub_menu">
    <?php
    if(isset($data['news_categories']) && is_array($data['news_categories']) && count($data['news_categories']) > 0){
        foreach($data['news_categories'] as $cat){    
            echo '<li class=""><a href="/blogs/news">'.$cat['name'].'</a></li>';
        }
    }
    ?>
 </ul>