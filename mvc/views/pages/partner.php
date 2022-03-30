
<div class="partner">
    <div class="gird">
        <div class="gird__row">
            <div class="container-header distance-left">
                 <h3 class="container-heading">Đối tác</h3>
        </div>
        <?php
                if(isset($data['partner']) && is_array($data['partner']) && count($data['partner']) > 0){
                    foreach($data['partner'] as $cat){              
        ?>
            <div class="gird__column-4">
                <div class="partner-item">
                    <img src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['partner_background']; ?>" alt="" class="partner-img">
                    <div class="partner-logo">
                        <img src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['partner_img']; ?>" alt="" class="partner-logo-img">
                    </div>
                </div>
            </div> 
        <?php    }
                }
        ?>              
        </div>
    </div>
</div>
