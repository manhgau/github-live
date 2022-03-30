
<?php
$sql_partner= "SELECT * FROM partner ";
$query_partner = mysqli_query($connect, $sql_partner);

?>
<div class="partner">
    <div class="gird">
        <div class="gird__row">
            <div class="container-header distance-left">
                 <h3 class="container-heading">Đối tác</h3>
        </div>
        <?php
            while($row_partner = mysqli_fetch_array($query_partner))
                            {                                                     
        ?>
            <div class="gird__column-4">
                <div class="partner-item">
                    <img src="<?php echo DOMAIN."/upload/product/"; ?><?php echo $row_partner['partner_background']; ?>" alt="" class="partner-img">
                    <div class="partner-logo">
                        <img src="<?php echo DOMAIN."/upload/product/"; ?><?php echo $row_partner['partner_img']; ?>" alt=""class="partner-logo-img">
                    </div>
                </div>
            </div> 
        <?php    }

        ?>              
        </div>
    </div>
</div>
