<div class="gird">
        <div class="gird__row">
            <div class="container-header">
                <h3 class="container-heading">Tất cả sản phẩm</h3>
            </div>
                <div class="gird">
                    <div class="gird__row">
                        <?php            
                            if(isset($high_to_low_prd) && is_array($high_to_low_prd) && count($high_to_low_prd) > 0){
                                foreach($high_to_low_prd as $cat){  
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
                                                            <?php
                                                                if ( $cat['hot'] == 1 ){ ?>
                                                                    <div class="product-hot">
                                                                        <i class="fas fa-check"></i>
                                                                        HOT
                                                                    </div>

                                                                <?php }else{
                                                                }?>
                                                            <?php
                                                                if ( $cat['discount'] > 0 ){ ?>
                                                                   <div class="product-sale">
                                                                       <span class="product-sale-number"><?php echo $cat['discount']; ?>%</span>
                                                                       <span class="product-sale-label">GIẢM</span>
                                                                   </div>

                                                                <?php }else{
                                                                }?>
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