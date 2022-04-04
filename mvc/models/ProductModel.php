<?php
class ProductModel extends db {
    //Lấy sản phẩm mới
    public function getNewProducts($offset=0, $limit=4){    
        $products = [];   //array();
        $sql_new = "SELECT * FROM products  ORDER BY `id` DESC LIMIT $offset, $limit";
        $query_new = mysqli_query($this->con, $sql_new);

        while($row_new = mysqli_fetch_array($query_new)) {       
            $products[] = $row_new;
        }                                          
        return  $products;
    }

    public function getAllProducts($offset=0, $limit=5){            
        $products = [];
        $sql = "SELECT * FROM products LIMIT $offset, $limit ";
        $query = mysqli_query($this->con, $sql);        
        while($row = mysqli_fetch_array($query)) {       
            $products[] = $row;
        }                                              
        return $products;
    }

    public function countProducts(){        
        $result = mysqli_query($this->con," SELECT COUNT(*) AS 'tong' FROM `products` ");                                                                           
        $totalRecords = mysqli_fetch_array($result);
        //$totalRecords = $totalRecords['total']??0;
        if(isset($totalRecords['tong'])){
            $total = $totalRecords['tong'];
        }else{
            $total = 0;
        }
        return  $total;
    }
    public function countProductsFeatured(){
        $result = mysqli_query($this->con,"SELECT COUNT(*) AS 'TONG' FROM `products` WHERE `hot` = 1 ");
        $totalRecords = mysqli_fetch_array($result);
        //$totalRecords = $totalRecords['total']??0;
        if(isset($totalRecords['tong'])){
            $total = $totalRecords['tong'];
        }else{
            $total = 0;
        }
        return  $total;
    }

    public function getFeatureProducts($offset=0, $limit=4){    
        $products = [];   //array();
        $sql_hot = "SELECT * FROM products where `hot` = 1 LIMIT $offset, $limit";
        $query_hot = mysqli_query($this->con, $sql_hot);
        

        while($row_hot = mysqli_fetch_array($query_hot)) {       
            $products[] = $row_hot;
        }                                              
        return  $products;
    }
    public function getProducts(){
        $products = [];   //array();
        $id= $_GET['id'];
        $sql = "SELECT * FROM products where `id` = $id ";
        $query = mysqli_query($this->con, $sql);
        

        while($row = mysqli_fetch_array($query)) {       
            $products[] = $row;
        }                                              
        return  $products;
    }
    public function shoppingCart(){
        $products = [];
        $id = $_POST['id'];
        $sqlSelectPro = "SELECT * FROM products WHERE id=".$id;
        $querySelectPro = mysqli_query($this->con,  $sqlSelectPro);
        while($row = mysqli_fetch_array($querySelectPro)){
            $products[] =$row;
        };
        return $products;
    }
    public function getOrder ($name, $email, $phone, $addres, $id_payment){
        $cart = $_SESSION["cart"]??[]; 
        $soluong = 0;
        if(isset($cart) && is_array($cart) && count($cart) > 0){
            foreach($cart as $value){
                $soluong +=$value["number"];
                $money_paid = $value['price'] * $value['number'];
                $total[$value['id']] = $money_paid;
            }};
            $sumtotal =array_sum($total);
            
            $sql ="INSERT INTO `order` (`name`,`email`,`phone`,`soluong`,`tongtien`,`diachi`,`id_payment`) VALUES ('$name', '$email', '$phone', '$soluong', '$sumtotal', '$addres', '$id_payment')";        
            mysqli_query($this->con, $sql);
            $order_id = $this->con->insert_id;
            if(isset($cart) && is_array($cart) && count($cart) > 0){
                foreach($cart as $value){
                    $money_paid = $value['price'] * $value['number'];
                    $prd_id = $value['id'];
                    $prd_img = $value['img'];
                    $prd_name = $value['prd_name'];
                    $price = $value['price'];
                    $number = $value['number'];
                    $sql_prd_order ="INSERT INTO `order_item` (`order_id`,`prd_id`,`prd_img`,`prd_name`,`soluong`,`giatien`) VALUES ('$order_id', '$prd_id', '$prd_img', '$prd_name', '$number', '$price')";        
                    mysqli_query($this->con, $sql_prd_order);
                    var_dump($sql_prd_order); 
                }};
        // var_dump($order_id);
        // var_dump($sql); 
        // die;
        return true;
    
     }
     public function callOrderUser () {
        $user = [];
        $name = isset($_SESSION['name'])?$_SESSION['name']:'';
        $email = isset($_SESSION['email'])?$_SESSION['email']:'';
        $sql_user = "SELECT * FROM `user` WHERE `email` = '".$email."' AND `name` = '".$name."' ";
        $query_user = mysqli_query($this->con, $sql_user);                                   
        while($row_user = mysqli_fetch_array($query_user)) {       
            $user[] = $row_user;
        }       
        return  $user;
        
    }
    public function callOrderPrd ($order_id) {
        $prd  = [];
        $sql_prd = "SELECT * FROM `order` WHERE `order_id` = $order_id";
        $query_prd = mysqli_query($this->con, $sql_prd);
        while($row_prd = mysqli_fetch_array($query_prd)) {       
             $prd[] = $row_prd;
         }
         return $prd;

     }
     

}
