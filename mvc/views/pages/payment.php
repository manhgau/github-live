<div class="payment-container">
    <div class="gird">
        <div class="payment-wrap">
            <div class="user-wrap">
                <h1 class="user-header"></h1>
                <span class="user-note">Thông tin giao hàng</span>
                <div class="user-payment">
                    <div class="input-wrap">
                        <div >
                            <i class="user-logo fas fa-user-circle"></i>
                        </div>
                        <div class="user-information">
                            <div class="user-heading">Lil manh</div>
                            <div class="user-logout">Đăng xuất</div>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <i class="user-logo--item fas fa-user"></i>
                        <input type="text" name="" id="" value= "lil mạnh" class="user-input" readonly>
                    </div>
                    <div class="input-wrap">
                         <i class="user-logo--item fas fa-envelope"></i>
                        <input type="email" name="" id="" value= "lil mạnh" class="user-input" readonly>
                    </div>
                    <div class="input-wrap">
                        <i class=" user-logo--item fas fa-mobile"></i>
                        <input type="text" name="" id="" value= "lil mạnh" class="user-input" readonly>
                    </div>
                    <div class="input-wrap">
                        <i class="user-logo--item fas fa-map-marked"></i>
                        <input type="text" name="" id="" value= "lil mạnh" class="user-input" readonly>
                    </div>
                    <div class="input-wrap">
                        <i class="user-logo--mess user-logo--item fas fa-comment"></i>
                        <input type="text" name="" id="" class="user-input">
                    </div>
                    <div class="input-wrap">
                        <input type="radio" id="html" name="fav_language" value="Thanh toán khi nhận hàng">
                        <label for="html">Thanh toán khi nhận hàng</label>
                    </div>
                    <div class="input-wrap">
                        <input type="radio" id="html" name="fav_language" value="Thanh toán qua chuyển khoản">
                        <label for="html">Thanh toán qua chuyển khoản</label>
                    </div>
                    <button>Hoàn tất đơn hàng</button>
                    <a class="form-link" href="<?php echo build_layout_url("home/cart"); ?>">Trở về giỏ hàng</a>
                </div>
            </div>
        <div class="pro-list">
        <?php   
                    $cart = $_SESSION["cart"]??[];         
                    if(isset($cart) && is_array($cart) && count($cart) > 0){
                        foreach($cart as $cat){ 
                            $money_paid = $cat['price'] * $cat['number'];
                            $total[$cat['id']] = $money_paid;
                            ?>
            <div class="pro-item">
                <div class="pro-item-img">
                    <img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt="">
                    <span class="pro-item-number"><?php echo $cat['number']; ?></span>
                </div>
                <div class="pro-item-name"><?php echo $cat['prd_name']; ?></div>
                <div class="pro-item-price"><?php echo number_format($cat['price'], 0, ',', ' '); ?>₫</div>
            </div>
            <?php }
                    }
                    $sumtotal =array_sum($total);
                    $ship = 35000;
                    $sum = $sumtotal + $ship;
                     ?>
            <div class="pro-list-footer">
                <div class="footer-item">
                    <label class="footer-heading" for="">Tạm tính:</label>
                    <span class="footer-number"><?php echo number_format($sumtotal, 0, ',', ' '); ?>₫</span>
                </div>
                <div class="footer-item">
                    <label class="footer-heading" for="">Phí vận chuyển:</label>
                    <span class="footer-number"><?php echo number_format($ship, 0, ',', ' '); ?>₫</span>                  
                </div>
                <div class="footer-item">
                    <label class="footer-heading" for="">Thành tiền:</label>
                    <span class="footer-number"><?php echo number_format( $sum, 0, ',', ' '); ?>₫</span>                 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    .user-logo--mess{

    }
    .user-logo{
        font-size: 45px;
        color: #00bcd4;
    }
    .user-information{
        padding: 4px 10px;
        font-size: 16px;
    }
    .user-input{
        padding: 10px;
        padding-left: 40px;
        width: 90%;
        outline: none;
        }
    .user-logo--item {
        font-size: 25px;
        color: #00bcd4;
        position: absolute;
        top: 5px;
        left: 10px;
    }
    .input-wrap{
        position: relative;
        display: flex;
        margin-top: 15px;
    }
    .user-wrap{
        width: 50%;
        padding-left: 20px;
    }
    .user-note{
        font-size: 25px;
        color: #00bcd4;
    }
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
    .pro-list-footer{
        display: flex;
        flex-direction: column;
    }
    .footer-item{
        display: flex;
        border-bottom: 1px solid #d4d4d4;
    }
    .footer-heading{
        text-align: center;
        width: 50%;
        padding: 10px 0;
        font-weight: 700;
    }
    .footer-number{
        text-align: center;
    }
    
</style>