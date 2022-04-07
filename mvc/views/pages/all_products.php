
    <div class="gird">
        <div class="gird__row">
            <div class="container-header">
                <div class="gird">
                    <div class="gird__row">
                        <?php            
                            if(isset($all_products) && is_array($all_products) && count($all_products) > 0){
                                foreach($all_products as $cat){  
                                    ?>
                                <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$cat['id'].""; ?>">

                                            <div class="gird__column-5">
                                                
                                                        <div class="container-product">
                                                            <img src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt="" class="container-img">
                                                            <h4 class="container-product-heading"><?php echo $cat['prd_name']; ?></h4>
                                                            <span class="price"><?php echo number_format($cat['price'], 0, ',', ' '); ?> ₫</span>
                                                            <span class="price-old"><?php echo number_format($cat['price_old'], 0, ',', ' '); ?> ₫</span>
                                                            <button class="cart-product" onclick="addCart('<?php echo $cat['id']; ?>')" >
                                                                <i class="fas fa-shopping-cart"></i>
                                                                <a class="form-link" href="">
                                                                    <span class="cart-note">THÊM VÀO GIỎ</span>
                                                                </a>
                                                            </button>
                                                        </div>
                                                
                                            </div>
                                        </a>
                        <?php   }
                        }
                        ?>
                    </div>
                </div>    
        </div>
     </div>
