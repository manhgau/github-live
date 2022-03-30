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

}
