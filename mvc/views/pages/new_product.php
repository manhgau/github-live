
            <div class="gird">
                <div class="gird__row">
                    <div class="container-header">
                    <a class="form-link" href="<?php echo build_layout_url("home/new_product"); ?>">
                    <h3 class="container-heading">Sản phẩm mới </h3>
                    </a>
                    </div>
                    <div class="gird">
                        <div class="gird__row">
                        <?php
    if(isset($new_product) && is_array($new_product) && count($new_product) > 0){
        foreach($new_product as $cat){    ?>                                                   
                        <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$cat['id'].""; ?>">
                <div class="gird__column-4">
                    
                            <div class="container-product">
                                <img src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt="" class="container-img">
                                <h4 class="container-product-heading"><?php echo $cat['prd_name']; ?></h4>
                                <span class="price"><?php echo number_format($cat['price'], 0, ',', ' '); ?> ₫</span>
                                <span class="price-old"><?php echo number_format($cat['price_old'], 0, ',', ' '); ?> ₫</span>
                                <div class="cart-product">
                                    <i class="fas fa-shopping-cart"></i>
                                    <a class="form-link" href="">
                                        <span class="cart-note">THÊM VÀO GIỎ</span>

                                    </a>
                                </div>
                            </div>
                    
                 </div>
                            </a>
                        <?php }
    }
                        ?>
                        </div>
                    </div>    
                </div>
            </div>

