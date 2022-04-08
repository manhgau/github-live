<?php
class AdminModel extends db {
    public function DanhSach(){
        $products = [];
        $sql = "SELECT p.*, c.`name` AS 'category_name' FROM products p INNER JOIN product_category c ON p.category_id = c.category_id  ";
        $query = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_array($query)) {       
            $products[] = $row;
        }                                              
        return $products;
    }
    public function Them($image, $prd_name, $price, $price_old, $discount, $quantity, $description, $sold, $category_id, $hot){
        $sql_reg ="INSERT INTO products(`img`, `prd_name`, `price`, `price_old`,`discount`, `quantity`,`description`, `sold`,`category_id`, `hot`)
         VALUES ('$image', '$prd_name', $price, $price_old , $discount, $quantity, '$description', $sold, $category_id, $hot)";        
        mysqli_query($this->con, $sql_reg);   
    //         var_dump($sql_reg);
    // die;  
        return true;
    }
    public function Sua($image, $prd_name, $price, $price_old, $quantity, $description, $sold, $category_id, $hot){
        $id = $_GET['id'];
        $sql ="UPDATE products SET `img` = '$image',`prd_name` = '$prd_name', `price` = $price,`price_old` = $price_old,`quantity` = $quantity,`description` = '$description',`sold` = $sold,`category_id` = $category_id,`hot` = '$hot' WHERE id=$id";        
        mysqli_query($this->con, $sql); 
    //                         var_dump($sql);
    // die;     
        return true;       
    }
    public function Xoa(){
        $id = $_GET['id'];
        $sql = "DELETE FROM products where id = $id";
        mysqli_query($this->con, $sql);   
    //                 var_dump($sql);
    // die;  
        return true;    
    }
    public function getCategories(){
        $categories = []; 
        $sql_get_parent_category = "SELECT * FROM product_category WHERE parent_id = 0";
        $query_parent_category =  mysqli_query ($this->con , $sql_get_parent_category);  
        while($row = mysqli_fetch_array($query_parent_category)){                 
            $categories[$row['category_id']] = $row;
        }    
        if(is_array($categories) && count($categories) > 0){
            //lấy danh mục cấp 2
            foreach($categories as $cat){
                $category_id = $cat['category_id'];                      
                $sql_get_child_category = "SELECT * FROM product_category WHERE parent_id = $category_id ";
                $query_child_category =  mysqli_query ($this->con , $sql_get_child_category); 
                $categories[$category_id]['childs'] = [];
                while($cat_child = mysqli_fetch_array($query_child_category)){    
                    $categories[$category_id]['childs'][] = $cat_child;                          
                }                
            }
        }
        
        return  $categories;

    }
    public function adminOrder (){
        $user_order = [];
        $sql = "SELECT * FROM `order` ";
        $query = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_array($query)) {       
            $user_order[] = $row;
        }                                              
        return $user_order;
    }
}