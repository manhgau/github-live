<div class="order_prd-container">
    <div class="gird">
        <div class="table-wrap">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Ảnh sản phẩm</th>                       
                        <th>Tên sản phẩm</th>
                        <th>Số lượng mua</th>
                        <th>Đơn giá</th>
                        <th>Trang thái</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                        if(isset($order_prd) && is_array($order_prd) && count($order_prd) > 0){
                            foreach($order_prd as $cat){      
                        ?>
                    <tr>
                                <td><img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['prd_img']; ?>" alt=""></td>                       
                                <td><?php echo $cat['prd_name']; ?></td>
                                <td><?php echo $cat['soluong']; ?></td>
                                <td class="font-number"><?php echo number_format($cat['giatien'], 0, ',', ' '); ?> ₫</td>
                                <td>Đang xử lý</td>
                    </tr>                            
                        <?php 
                            }}
                        ?>
                </tbody>
             </table>
             <div class="link-order-wrap">
                 <a class="form-link link-order" href="<?php echo build_layout_url("home/user"); ?>">Trở lại</a>
             </div>
        </div>
    </div>
</div>  
<style>
    .link-order-wrap {
        text-align: center;
        margin-top: 30px;
    }
    .link-order{
        padding: 10px 30px;
        background: #cddc39;
        border-radius: 25px;
        color: #fff;
    }
    .link-order:hover{
        opacity: 0.6;
    }
    .order_prd-container{
        padding-top: 250px;
    }
    .table-wrap {
        background: #fff;
        width: 100%;
        min-height: 200px;
        animation: modelFadeIn ease 0.3s;
    }
    .table{
        width: 100%;
        border-spacing: 0;
        border: 1px solid #999;
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