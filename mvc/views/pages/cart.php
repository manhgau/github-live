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
.payment{
    padding: 30px 15px;
    box-shadow: 0 7px 64px rgb(0 0 0 / 7%);
    margin-top: 30px;
    display: flex;
    justify-content: space-between;
}
.money-payment{
    font-size: 25px;
}
.payment-number{
    color: #ff5722;
}
.link-payment{
    padding: 10px;
    background: #ff9800;
    text-decoration: none;
    color: #fff;
    border-radius: 5px;
}
.link-payment:hover{
    opacity: 0.6;
}
.cart-nopro{
    padding-top: 250px;
}
.cart-nopro p {
    color:#ff5722;
    font-size: 25px;
    font-weight: 700;
    text-align: center;
}


</style>
<div class="gird">
<?php 
    $cart = $_SESSION["cart"]??[];
    $number = 0;
    if(is_array($cart) && count($cart) > 0){
        foreach($cart  as $value){
            $number += $number + (int)$value["number"];
        }};
    if($number == 0){ ?>
    <!-- ko c?? s???n ph???m -->
        <div class="cart-nopro">
             <p>Ch??a c?? s???n ph???m ???????c th??m v??o gi??? h??ng</p>
    </div>

<?php  }else{ ?>
<div class="table-wrap">
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>???nh s???n ph???m</th>                       
                        <th>T??n s???n ph???m</th>
                        <th>S??? l?????ng mua</th>
                        <!-- <th>C???p nh???p</th> -->
                        <th>????n gi?? c???a s???n ph???m</th>
                        <th>Th??nh ti???n c???a s???n ph???m</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
            <?php           
            $tien = 0;
            if(isset($cart) && is_array($cart) && count($cart) > 0){
                foreach($cart as $cat){  
                    $money_paid = $cat['price'] * $cat['number'];
                    $tien = $tien + $money_paid;
                    $total[$cat['id']] = $money_paid;
                    ?>
                    <tr>
                        <td><img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt=""></td>                       
                        <td><?php echo $cat['prd_name']; ?></td>
                        <td>
                            <input class="cart-number" type="number" name="number_cart" value="<?php echo $cat['number']; ?>">
                        </td>
                        <!-- <td>
                            <input type="submit" value="C???p nh???p">
                        </td> -->
                        <td class="font-number"><?php echo number_format($cat['price'], 0, ',', '.'); ?>???</td>
                        <td class="font-number"><?php echo number_format($money_paid, 0, ',', '.'); ?>???</td>
                        <td><a onclick ="return Del ('<?php echo $cat['prd_name']; ?>')" class="link link-color" href="<?php echo build_layout_url("home/delete_cart_prd")."&id=".$cat['id']."";; ?>"><i class="far fa-trash-alt"></i></a></td>
                    </tr>                            
                    <?php }  
            }
            $sumtotal =array_sum($total);
                            ?>
                </tbody>
        </table>
           <script>
               function Del (name){
                   return confirm ("B???n c?? ch???c ch???n mu???n x??a s???n ph???m: "+ name + "?");
                }
                </script>
</div>
<div class="payment">
    <div class="money-payment">
        <label class = "label">T???ng ti???n:</label>
        <span class = "payment-number"><?php echo number_format($sumtotal, 0, ',', '.'); ?>???</span>
    </div>
    <a class ="link-payment" href="
    <?php
    $check = check_login();
    if ($check==true) {
        echo build_layout_url("home/payment");
    }else {
        echo build_layout_url("signup/login");
    }
     ?>
    ">Thanh to??n</a>
</div>
<?php } ?>
</div>