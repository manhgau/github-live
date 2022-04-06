<div class="order_prd-container">
    <div class="gird">
        <div class="table-wrap">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Tên</th>                       
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Số lượng mua</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian mua</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                        if(isset($user_order) && is_array($user_order) && count($user_order) > 0){
                            foreach($user_order as $cat){  
                                $created_at    = date('H:i:s Y-m-d', $cat['created_at']);    
                        ?>
                    <tr>                    
                                <td><?php echo $cat['name']; ?></td>
                                <td><?php echo $cat['email']; ?></td>
                                <td><?php echo $cat['phone']; ?></td>
                                <td><?php echo $cat['diachi']; ?></td>
                                <td><?php echo $cat['soluong']; ?></td>
                                <td class="font-number"><?php echo number_format($cat['tongtien'], 0, ',', ' '); ?> ₫</td>
                                <td><?php echo $created_at; ?></td>
                    </tr>                            
                        <?php 
                            }}
                        ?>
                </tbody>
             </table>
             <div class="link-order-wrap">
                 <a class="form-link link-order" href="<?php echo build_layout_url("productadmin/danhsach"); ?>">Trở lại</a>
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