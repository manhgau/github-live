<style>
.table-wrap{
   padding-top: 200px; 
   width: 100%;
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
.btn-wrap{
    margin: 25px 0;
}
.btn-primary{
    text-decoration: none;
    padding: 10px;
    background: #4caf50;
    color: #fff;
    border-radius: 5px;
}
.btn-primary:hover{
    opacity: .7;
}
.link {
    text-decoration: none;
    color: #000;
    background: #eca621;
    padding: 5px 7px;
    color: #fff;
    border-radius: 3px;
}
.link-more{
    background: #8bc34a;;
}
.link:hover{
    opacity: 0.7;
}
.link-color{
    background: red;
}
.page-wrap{
    float: right;
    margin-top: 15px;
}
.page-item{
    padding: 6px 11px;
    text-decoration: none;
    margin: 0 5px;
    border: 1px solid #beb4b4;
}
.current-page{
    background: #575252;
    color: #fff;

}
.cart-number{
    width: 75px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #999;
    outline: none;
}
.font-number{
    font-size: 14px;
    color: #24aeb1;
}

</style>
<div class="gird">
<div class="table-wrap">
<table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Ảnh sản phẩm</th>                       
                        <th>Tên sản phẩm</th>
                        <th>Số lượng mua</th>
                        <th>Số lượng còn lại</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
            <?php   
            $cart = $_SESSION["cart"]??[];         
            if(isset($cart) && is_array($cart) && count($cart) > 0){
                foreach($cart as $cat){  
                    $quantity = $cat['quantity'] - $cat['number'];
                    $money_paid = $cat['price'] * $cat['number'];
                      ?>
                    <tr>
                        <td><img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt=""></td>                       
                        <td><?php echo $cat['prd_name']; ?></td>
                        <td>
                            <input class="cart-number" type="number" value="<?php echo $cat['number']; ?>">
                        </td>
                        <td>
                        <input class="cart-number" type="text" value="<?php echo $quantity; ?>">
                        </td>
                        <td class="font-number"><?php echo number_format($cat['price'], 0, ',', ' '); ?>₫</td>
                        <td class="font-number"><?php echo number_format($money_paid, 0, ',', ' '); ?>₫</td>
                        <td><a onclick ="return Del ('<?php echo $cat['prd_name']; ?>')" class="link link-color" href=""><i class="far fa-trash-alt"></i></a></td>
                    </tr>                            
                            <?php }  
            }
                            ?>
                </tbody>
           </table>
    <script>
        function Del (name){
            return confirm ("Bạn có chắc chắn muốn xóa sản phẩm: "+ name + "?");
    }
    </script>
</div>
</div>