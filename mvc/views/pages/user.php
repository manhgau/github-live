<div class="user-container-wrap">
    <div class="gird">
        <div class="user-container">
            <div class="user-information">
                <h3 class="user-heading">Hồ sơ của tôi</h3>
                <div class="user-main">
                    <form action="<?php echo build_layout_url("home/payment"); ?>" method="post">
                    <?php 
                        if(isset($user) && is_array($user) && count($user) > 0){
                            foreach($user as $cat){ 
                    ?>
                        <div class="user-item">
                            <div class="label-wrap">
                                <label>Tên</label>
                            </div>
                            <div class="user-item-heading">
                                <input type="text" name="name" id="" value= "<?php echo $cat['name']; ?>" placeholder = "Nhập tên" class="user-input">
                            </div>
                        </div>
                        <div class="user-item">
                            <div class="label-wrap">
                                <label>Email đăng nhập</label>
                            </div>
                            <div class="user-item-heading">
                            <input type="text" name="email" id="" value= "<?php echo $cat['email']; ?>" placeholder = "Nhập tên" class="user-input">
                            </div>
                        </div>
                        <div class="user-item">
                            <div class="label-wrap">
                                <label>Số điện thoại</label>
                            </div>
                            <div class="user-item-heading">
                            <input type="text" name="phone" id="" value= "<?php echo $cat['phone']; ?>" placeholder = "Nhập tên" class="user-input">
                            </div>
                        </div>
                        <div class="user-item">
                            <div class="label-wrap">
                                <label>Địa chỉ</label>
                            </div>
                            <div class="user-item-heading">
                            <input type="text" name="addres" id="" value= "<?php echo $cat['addres']; ?>" placeholder = "Nhập tên" class="user-input">
                            </div>
                        </div>
                        <input type="submit" value="Cập nhập">
                        <?php } }
                    ?>
                    </form>
                </div>  
            </div>
            <div class="user-order">
                <h3 class="user-order-header">Đơn hàng của tôi</h3>
                <?php 
                        if(isset($order) && is_array($order) && count($order) > 0){
                            foreach($order as $cat){ 
                            $created_at    = date('H:i:s Y-m-d', $cat['created_at']);
                    ?>
                <div class="order-content">
                    <div class="user-order-item">
                        <div class="order-item-wrap">
                            <div class="label-order">
                                <label>Tên</label>
                            </div>
                            <span class="order-item-heading"><?php echo $cat['name']; ?></span>
                        </div>
                        <div class="order-item-wrap">
                            <div class="label-order">
                                <label>Số lượng</label>
                            </div>
                            <span class="order-item-heading"><?php echo $cat['soluong']; ?></span>
                        </div>
                        <div class="order-item-wrap">
                            <div class="label-order">
                                <label>Tổng tiền</label>
                            </div>
                            <span class="order-item-heading"><?php echo number_format($cat['tongtien'], 0, ',', ' '); ?>₫</span>                       
                        </div>
                        <div class="order-item-wrap">
                            <div class="label-order">
                                <label>Ngày mua</label>
                            </div>
                            <span class="order-item-heading"><?php echo $created_at; ?></span>
                        </div>
                    </div>
                    <a href="<?php echo build_layout_url("home/order_prd")."&id=".$cat['id']."";; ?>" class="jd-prd-order">Chi tiết</a>
                </div>
                <?php } 
                }?>
            </div>
         </div>
    </div>
</div>
    <style>
    .jd-prd-order {
        min-width: 144px;
        height: 40px;
        margin-top: 25px;
        background: trang;
        background: transparent;
        outline: none;
        border: none;
        color: #009688;
        font-size: 16px;
        cursor: pointer;
    }
    .jd-prd-order:hover{
        opacity: 0.7;
    }
    .user-order-header{
        padding: 15px 0;
        border-bottom: 1px solid #999;
        font-size: 20px;
        font-weight: 400;
    }
    .order-content{
        display: flex;
        border-bottom: 1px solid #999;
        justify-content: space-between;
        padding: 10px;
    }
    .user-order-item{
        display: flex;
        flex-direction: column;
    }
    .order-item-wrap{
        display: flex;
        padding-bottom: 5px;
    }
    .label-order {
        font-size: 16px;
        min-width: 150px;
        color: #009688;
        padding: 0 20px;
    }
    .order-item-heading{
        font-size: 16px;
        color: #999;
    }
    .user-container-wrap{
        padding-top: 250px;
    }
    .user-container{
        display: flex;
    }
    .user-heading{
        font-weight: 400;
        font-size: 20px;
        border-bottom: 1px solid #999;
        padding: 15px 0;
    }
    .user-information{
        display: flex;
        flex-direction: column;
        width: 40%;
    }
    .user-main{
        padding: 30px 0;
    }
    .user-information{
        box-shadow: 0 7px 64px rgb(0 0 0 / 7%);
        padding: 0 20px;
        
    }
    .user-order{
        box-shadow: 0 7px 64px rgb(0 0 0 / 7%);
        width: 60%;
        margin-left: 30px;
        padding: 0 20px;
    }
    .user-item{
        display: flex;
        padding-bottom: 30px;
    }
    .label-wrap{
        width: 45%;
        text-align: right;
        padding: 10px 0;
    }
    .label-wrap label {
        color: #999;
    }
    .user-item-heading{
        padding-left: 30px;
        width: 100%;
    }
    .user-input{
        padding: 10px 5px;
        width: 100%;
        outline: none;
        border: 1px solid #999;
        border-radius: 5px;
    }
    </style>