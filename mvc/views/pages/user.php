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
            <div class="user-prd">

            </div>
         </div>
    </div>
 </div>
<div class="model js-model">
            <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Ảnh sản phẩm</th>                       
                            <th>Tên sản phẩm</th>
                            <th>Số lượng mua</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                            <th>Trang thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php 
                            if(isset($user) && is_array($user) && count($user) > 0){
                                foreach($user as $cat){ 
                        ?>
                            <td><img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt=""></td>                       
                            <td><?php echo $cat['prd_name']; ?></td>
                            <td> </td>
                            <td class="font-number"><?php echo number_format($cat['price'], 0, ',', ' '); ?>₫</td>
                            <td class="font-number"><?php echo number_format($money_paid, 0, ',', ' '); ?>₫</td>
                            <td></td>
                        <?php } }
                        ?>
                        </tr>                            
                    </tbody>
            </table>
</div>
    <!-- Hàm hiển thị model mua vé ( thêm class open vào model) -->
    <script>
        const buyBtns = document.querySelectorAll('.js-buy-ticket');
        const model = document.querySelector('.js-model');
        const modelClose = document.querySelector('.js-model-footer-btn');
        const modelCloseBtn = document.querySelector('.js-header-btn-close')
        function showBuyTickets() {
            model.classList.add('open');
        }
        function hishowBuyTickets(){            
            model.classList.remove('open');
        }
        function nuthishowBuyTickets(){
            model.classList.remove('open');
        }
        for (const buyBtn of buyBtns) {
            buyBtn.addEventListener('click',showBuyTickets);
        }
        modelClose.addEventListener('click',hishowBuyTickets);
        modelCloseBtn.addEventListener('click',nuthishowBuyTickets);
    </script>
    <style>
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
    .user-prd{
        box-shadow: 0 7px 64px rgb(0 0 0 / 7%);
        width: 60%;
        margin-left: 30px;
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
    .table{
    width: 100%;
    border: 1px solid;
    border-spacing: 0;
    }
    .thead-dark{
        background:#24aeb1;
        color: #fff;
    }
    .table th {
        padding: 10px 0;
        border-right: 1px solid #999;
        border-bottom: 1px solid #999;
    }
    .table td{
        padding: 10px 10px 0 10px;
        text-align: center;
        /* border-right: 1px solid #999; */
        border-bottom: 1px solid #999;
        
    }
    
    </style>