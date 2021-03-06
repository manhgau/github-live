
<style>
    .product-wrap{
        padding-top: 210px;
        width: 1290px;
        margin: auto;
    }
    .information-wrap{
        padding-top: 50px;
        width: 1290px;
        margin: auto;
        display: flex;
    }
    .product{
        display: flex;
        box-shadow: 0 7px 64px rgb(0 0 0 / 7%);
        border-radius: 10px;
        padding: 10px;
    }
    .product_img{
        width: 60%;
        padding: 10px 30px;
    }
    .product_main{
        display: flex;
        flex-direction: column;
        padding: 50px 30px;
    }
    .description-wrap{
        margin-top: 20px;
        width: 60%;
        box-shadow: 0 7px 64px rgb(0 0 0 / 7%);
        /* border: 1px solid #24aeb1; */
        border-radius: 10px;
        /* padding: 10px; */
    }
    .product-involve{
        margin-top: 20px;
        width: 40%;
        box-shadow: 0 7px 64px rgb(0 0 0 / 7%);
        /* border: 1px solid #24aeb1; */
        border-radius: 10px;
        /* padding: 10px; */
        margin-left: 50px;
    }
    .description-header{
        padding: 10px;
        background: #a6e9eb;
        color: #313131;
        border-top-left-radius:10px ;
        border-top-right-radius:10px ;
    }
    .involve-header{
        padding: 10px;
        background: #a6e9eb;
        color: #313131;
        border-top-left-radius:10px ;
        border-top-right-radius:10px ;
    }
    .btn-purchase{
        max-width: 147px;
        padding: 10px;
        background: #00bcd4;
        border: none;
        color: #fff;
        cursor: pointer;
    }
    .btn-purchase:hover{
        opacity: 0.5;

    }
    .cart-note{
        color: #fff;
    }
    .product-name{
        padding-bottom: 10px;
        font-size: 25px;
    }
    .sold{
        color: #999;
        padding-bottom: 10px; 
    }
    .price-heading{
        padding-bottom: 10px; 
        font-size: 20px;
    }
    .price{
        padding-bottom: 10px; 
        font-size: 25px;
    }
    .price-old{
        padding-bottom: 10px; 
        font-size: 25px;
    }
    .price-wrap{
        padding-bottom: 10px;
    }
    .quantity{
        padding-top: 15px;
        color: #999;
    }
    .evaluate{
        padding-top: 50px;
    }
    .description-note {
    padding: 20px;
    margin-top: 10px;
}

</style>
    <div class="product-wrap">
<?php            
    if(isset($product) && is_array($product) && count($product) > 0){
        foreach($product as $cat){  
 ?>
        <div class="row"  >
            <ol class="breadcrumb" >
                <li>Trang ch???</li>
                <li class="separation">Danh m???c s???n ph???m</li>
                <li class="separation"><?php echo $cat['prd_name']; ?></li>             
            </ol>
        </div>
        <div class="product">
                <div class="product_img">
                <img src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt="" class="container-img">
                </div>
                <div class="product_main">
                    <h4 class="product-name"><?php echo $cat['prd_name']; ?></h4>
                        <h5 class="sold">S??? l?????ng ???? b??n: <?php echo $cat['sold']; ?> sp</h5>
                    <div class="price-wrap">
                        <h5 class="price-heading">Gi?? c???a s???n ph???m:</h5>
                        <span class="price"><?php echo number_format($cat['price'], 0, ',', ' '); ?> ???</span>
                        <span class="price-old"><?php echo number_format($cat['price_old'], 0, ',', ' '); ?> ???</span>
                    </div>
                    <a href="<?php echo build_layout_url("home/product")."&id=".$cat['id'].""; ?>" class="form-link btn btn-purchase" type="submit" onclick="addCart('<?php echo $cat['id']; ?>')">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-note">TH??M V??O GI???</span>
                    </a>
                    <h5 class="quantity">S??? l?????ng c??n l???i: <?php echo $cat['quantity']; ?> sp</h5>
                    <div class="evaluate">
                        <form action="" id="frm_raiting" method="POST" >
							<span>????nh gi?? s???n ph???m:</span>
							<input type="radio" name="star_val" value="1" class="1_star star_val">
							<input type="radio" name="star_val" value="2" class="2_star star_val" >
							<input type="radio" name="star_val" value="3" class="3_star star_val">
							<input type="radio" name="star_val" value="4" class="4_star star_val">
							<input type="radio" name="star_val" value="5" class="5_star star_val" checked="">
							<br>
							<div>
								<img src="<?php echo DOMAIN;?>/public//gold_star.png" alt="" class="star" id="1_star">
								<img src="<?php echo DOMAIN;?>/public//gold_star.png" alt="" class="star" id="2_star">
								<img src="<?php echo DOMAIN;?>/public//gold_star.png" alt="" class="star" id="3_star">
								<img src="<?php echo DOMAIN;?>/public//gold_star.png" alt="" class="star" id="4_star">
								<img src="<?php echo DOMAIN;?>/public//gold_star.png" alt="" class="star" id="5_star">
							</div><br>
							<button type="submit" name="rate" class="btn btn-default">????nh gi??</button>
						</form>            
                    </div>
                </div>
            </div>
            <?php   }
    }
    ?>
        </div>
        <div class="information-wrap">

            <div class="description-wrap">
                <div class="description">
                    <h4 class="description-header">M?? t??? s???n ph???m:</h4>
                    <div class="description-note">
                        <span ><?php echo $cat['description']; ?></span>   
                    </div>
                </div>
            </div>
            <div class="product-involve">
            <h4 class="involve-header">C??c s???n ph???m li??n quan:</h4>
                <div class="pro-invole-item">
                    <div class="pro-invole-img">
                    <img src="<?php echo DOMAIN;?>/public/img/fd8f5d3618960cc47a3e39f7b5e8d868.jpg" alt="" class="container-img">
                    </div>
                    <div class="pro-invole-main">
                        <h4 class="pro-invole-name">S???n ph???m 1</h4>
                        <span class="pro-invole-price">6000000</span>
                    </div>
                </div>
            </div>
        </div>