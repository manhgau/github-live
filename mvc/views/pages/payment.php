<div class="payment-container">
    <div class="gird">
        <div class="payment-wrap">
            <div class="user-wrap">
                <h1 class="user-header"></h1>
                <span class="user-note">Thông tin giao hàng</span>
                <div class="user">
                    <div class="user-logo"><i class="fas fa-user-circle"></i></div>
                <div class="user-information">
                    <div class="user-heading">Lil manh</div>
                    <div class="user-logout">Đăng xuấ</div>
                    <input type="text" name="" id="" class="user-name">
                    <input type="email" name="" id="" class="user-email">
                    <input type="text" name="" id="" class="user-phone">
                    <input type="text" name="" id="" class="user-addres">
                    <input type="text" name="" id="" class="user-message">
                </div>
            </div>
        </div>
        <div class="pro-list">
        <?php   
                    $cart = $_SESSION["cart"]??[];         
                    if(isset($cart) && is_array($cart) && count($cart) > 0){
                        foreach($cart as $cat){  ?>
            <div class="pro-item">
                <div class="pro-item-img">
                    <img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt="">
                    <span class="pro-item-number"><?php echo $cat['number']; ?></span>
                </div>
                <div class="pro-item-name"><?php echo $cat['prd_name']; ?></div>
                <div class="pro-item-price"><?php echo number_format($cat['price'], 0, ',', ' '); ?>₫</div>
            </div>
            <?php }
                    } ?>
            <div class="pro-list-footer">
                <label for="">Tạm tính:</label>
                <span>789y898</span>
                <label for="">Phí vận chuyển: 35 000</label>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    .payment-container{
        padding-top: 200px;
    }
    .payment-wrap{
        box-shadow: 0 7px 64px rgb(0 0 0 / 7%);
        display: flex;
        padding-top: 25px;
    }
    .pro-item{
        display: flex;
        padding: 10px;
        position: relative;
        border-left: 2px solid #999;
    }
    .pro-item-number{
        position: absolute;
        background: #ff5722;
        color: #fff;
        padding: 6px 10px;
        font-size: 12px;
        border-radius: 18px;
        top: -5px;
        left: 5px;
    }
    .pro-item-img{
        width: 15%;
    }
    .pro-item-name{
        width: 70%;
        padding: 30px 15px;
        color: #00bcd4;
        font-weight: 600;
    }
    .pro-item-price{
        width: 15%;
        padding: 30px 0;
        color: #f00b0b;
        font-weight: 600;
    }
</style>