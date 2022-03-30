<?php  
if(isset($data['product_categories']) && is_array($data['product_categories']) && count($data['product_categories']) > 0) {     
    foreach($data['product_categories'] as $category){ ?>
        <div class="mega-menu-item">
         <a href="/collections/all" class="product-header"><?php echo $category['name']  ?></a>
            <ul>
            <?php
                 $childs = $category['childs']??[];
                 if(is_array($childs) && count($childs) > 0){
                    foreach($childs as $child){ ?>
                     <li>
                        <a href="/collections/all"><?php echo $child['name']  ?></a>
                    </li>   
                     <?php 
                     }
                     ?>                        
             </ul>
            <?php
             }
             ?>  
 </div>
 <?php 
  }
}
 ?>  