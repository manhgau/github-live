
    <div class="gird">
        <div class="gird__row">
            <div class="container-header">
                <h3 class="container-heading">Sản phẩm nổi bật </h3>
            </div>
        <div class="gird">
            <div class="gird__row">
        <?php
        if(isset($featured_products) && is_array($featured_products) && count($featured_products) > 0){
        foreach($featured_products as $product){                                                  
                        ?>
                        <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$cat['id'].""; ?>">
                    <div class="gird__column-4">
                    <?php
                        $print_product_item = print_product_item($product);
                        echo $print_product_item;
                    ?> 
                    </div>
                            </a>
                        <?php }
    }
                        ?>
             </div>
        </div>    
     </div>
</div>