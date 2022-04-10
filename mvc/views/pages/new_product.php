
            <div class="gird">
                <div class="gird__row">
                    <div class="container-header">
                        <h3 class="container-heading">Sản phẩm mới </h3>
                    </div>
                    <div class="gird">
                        <div class="gird__row">
                            <?php
                                if(isset($new_product) && is_array($new_product) && count($new_product) > 0){
                                foreach($new_product as $product){    ?>                                                   
                                <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$product['id'].""; ?>">
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
            <div class="page-wrap">
        <?php
            $pagination = pagiantion($page, $limit, $total_page, $base_url);
            echo $pagination;
        ?>
     </div>  

