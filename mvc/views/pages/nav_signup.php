<style>
    .nav-signup{
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
    }
    .category-logo{
        width: 15%;
    }
    .form-link{
        color:#ff5722;
    }

</style>
<div class="gird">
<div class="nav-signup">
    
    <div class="category-logo">
        <a class="form-link" href="<?php echo build_layout_url("home"); ?>">  
            <img src="<?php echo DOMAIN;?>/public/img/logo_medium.webp" alt="Hogwarts" class="category-logo-img">
        </a>
    </div>
    <div class="help-signup">
    <a class="form-link" href="<?php echo build_layout_url("home"); ?>">  
            Cần trợ giúp?
        </a>
    </div>
</div>
</div>