<div class="gird">
        <div class="gird__row">
            <div class="container-header">
                <h3 class="container-heading">Tất cả sản phẩm</h3>
            </div>
                <div class="gird">
                    <div class="gird__row">
                        <?php            
                            if(isset($low_to_high_prd) && is_array($low_to_high_prd) && count($low_to_high_prd) > 0){
                                foreach($low_to_high_prd as $product){  
                                    ?>
                                <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$product['id'].""; ?>">

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