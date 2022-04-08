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
                                                
                                            </div>
                                        </a>
                        <?php   }
                        }
                        ?>
                    </div>
                </div>    
        </div>
     </div>