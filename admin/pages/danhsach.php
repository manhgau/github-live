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
    background: #ede5e5;
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
    background:#555;
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

</style>
<?php
//var_dump($_SESSION);
 $i =1;
$item_perz_page =!empty($_GET['per_page']) ? $_GET['per_page'] : 3;
$item_perz_page = max(1, $item_perz_page);

$current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$current_page = max(1, $current_page);

$offset = ($current_page - 1 ) * $item_perz_page;
$sql = "SELECT p.*, c.`name` AS 'category_name' FROM products p INNER JOIN product_category c ON p.category_id = c.category_id LIMIT $item_perz_page OFFSET $offset ";
$query = mysqli_query($connect,$sql);

$totalRecords = mysqli_query($connect,"SELECT * FROM `products`");
$totalRecords = $totalRecords -> num_rows;
$totalPage = ceil ($totalRecords / $item_perz_page);

if($totalRecords > 0 && ($current_page > $totalPage) ){
    redirect(build_layout_url("danhsach", true));   
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh s??ch s???n ph???m</h2>
            <?php
                $check = check_login();
                if($check==true){ 
                    $name = isset($_SESSION['name'])?$_SESSION['name']:'';
                    ?>
                    <div>
                        <p>Xin ch??o <b><?php echo $name; ?></b></p>
                        <form class="form-logout" method="post" action="<?php echo build_layout_url("logout"); ?>">                              
                            <button class="btn btn-success" type="submit">????ng xu???t</button>
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
                        <th>ID s???n ph???m</th>
                        <th>???nh s???n ph???m</th>                       
                        <th>T??n s???n ph???m</th>
                        <th>Gi?? s???n ph???m</th>
                        <th>Gi?? c?? s???n ph???m</th>
                        <th>S??? l?????ng s???n ph???m</th>
                        <th>M?? t???</th>
                        <th>S??? l?????ng ???? b??n</th>
                        <th>Lo???i s???n ph???m</th>
                        <th>S???n ph???m n???i b???t</th>
                        <th>S???a</th>
                        <th>X??a</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_array($query))
                        {                                                     
                            ?>
                            <tr>
                                <td><?php echo ($offset + $i); $i++; ?></td>
                                <td><?php echo $row['id']; ?></td>
                                <td>
                                    <img style ="width:100px" src="<?php echo DOMAIN."/upload/product/"; ?><?php echo $row['img']; ?>" alt="">
                                </td>
                                <td><?php echo $row['prd_name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['price_old']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['sold']; ?></td>
                                <td><?php echo $row['category_name']; ?></td>
                                <td>
                                    <?php
                                    if($row['hot'] == 1){
                                       echo "HOT"; 
                                    }else{
                                        echo "NO HOT";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a class="link" href="<?php echo build_layout_url("sua", true)."&id=".$row['id']."";?>">S???a</a>
                                </td>
                                <td>
                                <a onclick ="return Del ('<?php echo $row['prd_name']; ?>')" class="link link-color" href="<?php echo build_layout_url("xoa", true)."&id=".$row['id']."";?>">X??a</a>
                                </td>
                            </tr>                            
                            <?php }                             
                            ?>
                </tbody>
           </table>
           <!-- Ph??n trang -->
           <div class="page-wrap">
               <?php 
               if ($current_page > 3) {
                   $first_page =1;
                ?>
                <a class = "page-item" href="?per_page=<?=$item_perz_page?>&page=<?=$first_page?>">First</a>
                <?php
               }
               if ($current_page > 1) {
                $prev_page =$current_page - 1;
                ?>
                <a class = "page-item" href="?per_page=<?=$item_perz_page?>&page=<?=$prev_page?>">Prev</a>
                <?php
                }
               ?>
                <?php for ($num = 1; $num <= $totalPage; $num ++) { ?>
                    <?php if ($num != $current_page) { ?>
                        <?php if ($num > $current_page - 3 && $num < $current_page + 3 ) { ?>
                            <a class = "page-item" href="?per_page=<?=$item_perz_page?>&page=<?=$num?>"><?=$num?></a>
                        <?php } ?>
                   <?php } else {?>
                        <strong class= "current-page page-item"><?=$num?></strong>
                    <?php }?>
                <?php }?>
                <?php 
                                if ($current_page > 0 && $current_page < $totalPage) {
                                    $next_page =$current_page + 1;
                                    ?>
                                    <a class = "page-item" href="?per_page=<?=$item_perz_page?>&page=<?=$next_page?>">Next</a>
                                    <?php
                                    }
               if ($current_page < $totalPage - 2) {
                   $end_page =$totalPage;
                ?>
                    <a class = "page-item" href="?per_page=<?=$item_perz_page?>&page=<?=$end_page?>">Last</a>
                <?php
               }
               ?>
           </div>


           <div class="btn-wrap">
               <a class="link link-more" href="<?php echo build_layout_url("them", true);?>">Th??m m???i</a>
           </div>
        </div>
    </div>
</div>
<script>
    function Del (name){
        return confirm ("B???n c?? ch???c ch???n mu???n x??a s???n ph???m: "+ name + "?");
    }
</script>