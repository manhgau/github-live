<?php require_once "./mvc/views/blocks/option_first.php" ?>
<?php require_once "./mvc/views/pages/slider.php" ?>
<?php require_once "./mvc/views/pages/option.php" ?>
<div class="container">
<?php require_once "./mvc/views/pages/home_all_products.php" ?>
<div class="btn-wrap">
     <a class="form-link" href="<?php echo build_layout_url("home/all_products"); ?>">
          <buttom class="btn-extend">Xem tất cả</buttom>
     </a>
</div>
</div>
<?php require_once "./mvc/views/pages/partner.php" ?>
<div class="container distance">
<?php require_once "./mvc/views/pages/new_product.php" ?>
<div class="btn-wrap">
     <a class="form-link" href="<?php echo build_layout_url("home/new_product"); ?>">
          <buttom class="btn-extend">Xem tất cả</buttom>
     </a>   
</div>
</div>
<?php require_once "./mvc/views/pages/popular.php" ?>
<div class="container">
<?php require_once "./mvc/views/pages/featured_products.php" ?>
<div class="btn-wrap">
     <a class="form-link" href="<?php echo build_layout_url("home/featured_products"); ?>">
          <buttom class="btn-extend">Xem tất cả</buttom>
     </a>  
</div>
</div>
<?php require_once "./mvc/views/pages/news.php" ?>
<?php require_once "./mvc/views/pages/comment.php" ?>
