<style>
.table-wrap{
   padding-top: 200px; 
   width: 70%;
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

</style>
<div class="gird">
<div class="table-wrap">
<table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Ảnh sản phẩm</th>                       
                        <th>Tên sản phẩm</th>
                        <th>Số lượng mua</th>
                        <th>Số lượng còn lại</th>
                        <th>Thành tiền</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
            <?php            
            if(isset($products) && is_array($products) && count($products) > 0){
                foreach($products as $cat){  
                      ?>
                            <tr>
                                <td><?php echo ($offset + $i); $i++; ?></td>
                                <td>
                                    <img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt="">
                                </td>
                                <td><?php echo $cat['prd_name']; ?></td>
                                <td><?php echo $cat['price']; ?></td>
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
                                <a onclick ="return Del ('<?php echo $cat['prd_name']; ?>')" class="delete" href="<?php echo build_layout_url("productadmin/xoa")."&id=".$cat['id']."";?>">Xóa</a>
                                </td>
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