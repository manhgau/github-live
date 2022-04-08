<style>
.container-fluid{
    border: 1px solid;

}
.card-header h2{
    margin: 0;
    padding: 10px;
    border-bottom: 1px solid #bebbbb;
    

}
.card-header{
    display: flex;
    justify-content: space-between;
    padding: 15px 35px 15px 10px;
    background: #009688;
}
.card-body{
    padding: 10px;
}
.table{
    width: 100%;
    border: 1px solid;
    border-spacing: 0;
}
.thead-dark{
    background:#03a9f4;
    color: #fff;
}
.table th {
    padding: 10px 0;
    border-right: 1px solid #000;
    border-bottom: 1px solid #000;
}
.table td{
    padding: 10px 10px 0 10px;
    text-align: center;
    border-right: 1px solid #000;
    border-bottom: 1px solid #000;
    
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
.link-login{
    text-decoration: none;
    border-right: 1px solid #444;
    padding-right: 5px;
    color: #ff5722;
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
.menu-wrap{
    display: flex;
    flex-direction: column;
}
.link-menu{
    text-decoration: none;
    padding: 10px;
    color: #fff;
}
.link-menu:hover{
    color: #bebbbb;
}

</style>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="menu-wrap">
                <h2>Danh sách sản phẩm</h2>
                <a class="link-menu" href="<?php echo build_layout_url("productadmin/admin_order");?>">Danh sách đơn hàng</a>
            </div>
            <?php
                $check = check_login();
                if($check==true){ 
                    $name = isset($_SESSION['name'])?$_SESSION['name']:'';
                    ?>
                    <div>
                        <p>Xin chào: <b><?php echo $name; ?></b></p>
                        <form class="form-logout" method="post" action="<?php echo build_layout_url("signup/logout"); ?>">                              
                            <button class="btn btn-success" type="submit">Đăng xuất</button>
                        </form>
                    </div>
                <?php }
            ?>            
        </div>
        <div class="card-body">
           <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>ID sản phẩm</th>
                        <th>Ảnh sản phẩm</th>                       
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá cũ sản phẩm</th>
                        <th>Giarm giá</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Số lượng đã bán</th>
                        <th>Loại sản phẩm</th>
                        <th>Sản phẩm nổi bật</th>
                        <th>Thêm</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    
            <?php            
            if(isset($products) && is_array($products) && count($products) > 0){
                foreach($products as $cat){  
                      ?>
                            <tr>
                                <td><?php echo ($offset + $i); $i++; ?></td>
                                <td><?php echo $cat['id']; ?></td>
                                <td>
                                    <img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt="">
                                </td>
                                <td><?php echo $cat['prd_name']; ?></td>
                                <td><?php echo number_format($cat['price'], 0, ',', ' '); ?> ₫</td>
                                <td><?php echo number_format($cat['price_old'], 0, ',', ' '); ?> ₫</td>
                                <td><?php echo $cat['discount']; ?></td>
                                <td><?php echo $cat['quantity']; ?></td>
                                <td><?php echo $cat['description']; ?></td>
                                <td><?php echo $cat['sold']; ?></td>
                                <td><?php echo $cat['category_name']; ?></td>
                                <td>
                                    <?php
                                    if($cat['hot'] == 1){
                                       echo "HOT"; 
                                    }else{
                                        echo "NO HOT";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a class="link link-more" href="<?php echo build_layout_url("productadmin/them")?>">Thêm</a>
                                </td>
                                <td>
                                    <a class="link" href="<?php echo build_layout_url("productadmin/sua")."&id=".$cat['id']."";?>">Sửa</a>
                                </td>
                                <td>
                                <a onclick ="return Del ('<?php echo $cat['prd_name']; ?>')" class="link link-color" href="<?php echo build_layout_url("productadmin/xoa")."&id=".$cat['id']."";?>">Xóa</a>
                                </td>
                            </tr>                            
                            <?php }  
            }
                            ?>
                </tbody>
           </table>
        </div>
    </div>
</div>
<script>
    function Del (name){
        return confirm ("Bạn có chắc chắn muốn xóa sản phẩm: "+ name + "?");
    }
</script>