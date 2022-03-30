<style>
    .container{
        margin: auto;
        margin-top: 50px;
        width: 70%;
        border: 1px solid #b8b4b4;
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
                    <input type="text" name="prd_name"  class="form_control" require value="<?php echo $prd_name; ?>" >
                </div>
                <div class="form_group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price"  class="form_control" require value="<?php echo $price; ?>">
                </div>
                <div class="form_group">
                    <label for="">Giá cũ của sản phẩm</label>
                    <input type="number" name="price_old"  class="form_control" require value="<?php echo $price_old; ?>">
                </div>
                <div class="form_group">
                    <label for="">Số lượng sản phẩm</label>
                    <input type="number" name="quantity"  class="form_control" require value="<?php echo $quantity; ?>">
                </div>
                <div class="form_group">
                    <label for="">Mô tả sản phẩm</label>
                    <textarea name="description" rows=5 class="form_control" require value="<?php echo $description; ?>"></textarea>   
                </div>
                <div class="form_group">
                    <label for="">Số lượng đã bán</label>
                    <input type="number" name="sold"  class="form_control" require value="<?php echo $sold; ?>">
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
