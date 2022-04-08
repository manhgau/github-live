
    <div class="gird">
        <div class="gird__row">
            <div class="container-header">
                <h3 class="container-heading">Tất cả sản phẩm</h3>
            </div>
                <div class="gird">
                    <div class="gird__row">
                        <?php            
                            if(isset($all_products) && is_array($all_products) && count($all_products) > 0){
                                foreach($all_products as $product){  
                                    ?>
                                <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$cat['id'].""; ?>">

                                            <div class="gird__column-5">
                                            <?php
                                                $print_product_item = print_product_item($product);
                                                echo $print_product_item;
                                            ?> 
                                            </div>
                                        </a>
                        <?php   }
                        }
                        ?>
                    </div>
                </div>    
        </div>
     </div>
     <div class="page-wrap">
        <?php
            $pagination = pagiantion($page, $limit, $total_page, $base_url);
            echo $pagination;
        ?>
     </div>                            