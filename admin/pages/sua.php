<style>
    .container{
        margin: auto;
        margin-top: 50px;
        width: 70%;
        border: 1px solid #b8b4b4;
    }
    .card{

    }
    .card-header{
        padding: 10px 10px;
        border-bottom: 1px solid #b8b4b4;
        background: #c6e6e3;
    }
    .card-header h2{
        margin: 0;
    }
    .card-body{
        padding: 20px 15px;
    }
    .form_group{
        display: flex;
        flex-direction: column;
        padding-bottom: 20px;

    }
    .form_control{
        margin-top: 10px;
        padding: 7px 5px;
        border: 1px solid #c6c4c4;
        border-radius: 3px;
        outline: none;
    }
    .form_control-img{
        margin-top: 10px;
    }
    .btn-success{
        border-radius: 5px;
        background: #2ddd4b;
        padding: 10px;
        color: #fff;
        text-decoration: none;
        outline: none;
        border: none;
        cursor: pointer;
    }
    .btn-success:hover{
        opacity: 0.7;
    }
</style>
<?php
    $categories = get_categories($connect);
    $id = isset($_GET['id'])?$_GET['id']:0;
    $sql_brand = "SELECT * FROM product_category";
    $query_brand = mysqli_query ($connect , $sql_brand);    
    $sql_up = "SELECT * FROM products where id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc ($query_up);
    if(is_array($row_up) && count($row_up)){
        if(isset($_POST) && count($_POST) > 0) {
            if($_FILES['image']['name']==''){
                $image= $row_up['img'];
            }else{
                $image= $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                $file_save = UPLOAD_DIR."/product/".$image;
                move_uploaded_file($image_tmp, $file_save);
            }
            $prd_name =$_POST['prd_name'];
            $price =$_POST['price'];
            $price_old =$_POST['price_old'];
            $quantity =$_POST['quantity'];
            $description =$_POST['description'];
            $sold =$_POST['sold'];
            $category_id =$_POST['category_id'];
            $hot = ( isset($_POST['hot']) && $_POST['hot']==1 )?1:0;
            $sql ="UPDATE products SET `img` = '$image',`prd_name` = '$prd_name', `price` = $price,`price_old` = $price_old,`quantity` = $quantity,`description` = '$description',`sold` = $sold,`category_id` = $category_id,`hot` = '$hot' WHERE id=$id";    
            $query = mysqli_query($connect, $sql);
            redirect(build_layout_url("danhsach", true));
    
        }
        //sp tồn tại
    }else{
        redirect(build_layout_url("danhsach", true));
    }

        
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method ="post" action="" enctype="multipart/form-data" >
                <div class="form_group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image"  class="form_control-img" require>
                </div>
                <div class="form_group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="prd_name"  class="form_control" require value="<?php echo $row_up['prd_name']; ?>" >
                </div>
                <div class="form_group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price"  class="form_control" require value="<?php echo $row_up['price']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Giá cũ của sản phẩm</label>
                    <input type="number" name="price_old"  class="form_control" require value="<?php echo $row_up['price_old']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Số lượng sản phẩm</label>
                    <input type="number" name="quantity"  class="form_control" require value="<?php echo $row_up['quantity']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Mô tả sản phẩm</label>
                    <textarea name="description" rows=5 class="form_control" require value="<?php echo $row_up['description']; ?>"></textarea>   
                </div>
                <div class="form_group">
                    <label for="">Số lượng đã bán</label>
                    <input type="number" name="sold"  class="form_control" require value="<?php echo $row_up['sold']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Danh mục</label>
                    <?php
                    if(is_array($categories) && count($categories) > 0){
                        ?>
                        <select name="category_id" class="form_control">
                            <?php
                            foreach($categories as $category){
                                echo "<optgroup label='".$category['name']."'>";
                                    $childs = $category['childs']??[];
                                    if(is_array($childs) && count($childs) > 0){
                                        foreach($childs as $child){
                                            echo "<option value=".$child['category_id'].">".$child['name']."</option>";
                                        }
                                    }
                                echo "</optgroup>";
                            }
                            ?>                   
                        </select>        
                    <?php }
                    ?>        
                </div>
                <div class="form_group">
                    <label for="">Sản phẩm nổi bật</label>
                    <input type="checkbox" id="hot" name="hot" value="1">
                </div>
                <button class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>
