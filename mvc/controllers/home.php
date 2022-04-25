<?php

// http://localhost/live/Home/Show/1/2

class home extends controller{

    // Must have SayHi()
    public function allproducts(){                               
        //danh sách tin tức
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();   
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories();  
        // danh sách tất cả sản phẩm
        $ProductModel = $this->model("ProductModel");
        $all_products = $ProductModel->getAllProducts();
        //partner
        $Partner = $this->model("Partner");
        $partner = $Partner->getPartner();
        // danh sách sản phẩm mới        
        $new_product = $ProductModel->getNewProducts();
        // danh sách sản phẩm nổi bật        
        $featured_products = $ProductModel->getFeatureProducts();
        
        //$this->layout = 'no_footer';

        $this->view("home", [
            "Page"=>"home",
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'all_products'          => $all_products,
            'partner'               => $partner,
            'new_product'         => $new_product,
            'featured_products'     => $featured_products
        ]);

    }
    function home_all_products(){    
        //Tin tức
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories();         

        $ProductModel = $this->model("ProductModel");                 
        $all_products = $ProductModel->getAllProducts();                 
        $this->view("home_all_products",[
            'all_products'          => $all_products,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
        ]);
    }
    function all_products(){    
        //Tin tức
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories();         
        // Phân trang
        $limit =!empty($_GET['limit']) ? $_GET['limit'] : 8;
        $limit = max(1, $limit);

        $page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $page = max(1, $page); 
        $offset = ($page - 1) * $limit;

        // danh sách sản phẩm mới
        $ProductModel = $this->model("ProductModel");                
        $total_products = $ProductModel->countProducts();  
        $all_products = $ProductModel->getAllProducts($offset, $limit);  
        $total_page = ceil ($total_products / $limit);                  
        $this->view("all_products",[
            'all_products'          => $all_products,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            =>  $total_page,
            'limit'                 =>  $limit,
            'page'                  =>  $page,
            'base_url'              =>  build_layout_url("home/all_products")
        ]);
    }
    function new_product(){   
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();     
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // Phân trang
        $limit =!empty($_GET['limit']) ? $_GET['limit'] : 8;
        $limit = max(1, $limit);

        $page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $page = max(1, $page); 
        $offset = ($page - 1) * $limit;

        // danh sách sản phẩm mới
        $ProductModel = $this->model("ProductModel");                
        $total_products = $ProductModel->countProducts();  
        $new_product = $ProductModel->getNewProducts($offset, $limit);  
        $total_page = ceil ($total_products / $limit);        
        $this->view("new_product",[
            'new_product'         => $new_product,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            =>  $total_page,
            'limit'                 =>  $limit,
            'page'                  =>  $page,
            'base_url'              =>  build_layout_url("home/new_product")
        ]);
    }

    // }
    function featured_products(){
        //TIN TỨC
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // Phân trang
        $limit =!empty($_GET['limit']) ? $_GET['limit'] : 8;
        $limit = max(1, $limit);

        $page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $page = max(1, $page); 
        $offset = ($page - 1) * $limit;
        $ProductModel = $this->model("ProductModel");                
        $total_products = $ProductModel->countProducts();  
        $featured_products = $ProductModel->getFeatureProducts($offset, $limit);  
        $total_page = ceil ($total_products / $limit);    
        $this->view("featured_products", [
            'featured_products'     => $featured_products,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            =>  $total_page,
            'limit'                 =>  $limit,
            'page'                  =>  $page,
            'base_url'              =>  build_layout_url("home/new_product")
            
        ]);

    }
    function high_to_low_prd(){
        //TIN TỨC
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // SẢN PHÂM NỔI BẬT
        $ProductModel = $this->model("ProductModel");
        $high_to_low_prd = $ProductModel->highToLow();
        // Phân trang
        $limit =!empty($_GET['limit']) ? $_GET['limit'] : 10;
        $limit = max(1, $limit);

        $page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $page = max(1, $page); 
        $offset = ($page - 1) * $limit;
        $ProductModel = $this->model("ProductModel");                
        $total_products = $ProductModel->countProducts();  
        $high_to_low_prd = $ProductModel->highToLow($offset, $limit);  
        $total_page = ceil ($total_products / $limit);    
        $this->view("high_to_low_prd", [
            'high_to_low_prd'     => $high_to_low_prd,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            =>  $total_page,
            'limit'                 =>  $limit,
            'page'                  =>  $page,
            'base_url'              =>  build_layout_url("home/high_to_low_prd")
        ]);

    }
    function low_to_high_prd(){
        //TIN TỨC
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // Phân trang
        $limit =!empty($_GET['limit']) ? $_GET['limit'] : 10;
        $limit = max(1, $limit);

        $page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $page = max(1, $page); 
        $offset = ($page - 1) * $limit;
        $ProductModel = $this->model("ProductModel");                
        $total_products = $ProductModel->countProducts();  
        $low_to_high_prd = $ProductModel->lowToHigh($offset, $limit);  
        $total_page = ceil ($total_products / $limit);    
        $this->view("low_to_high_prd", [
            'low_to_high_prd'     => $low_to_high_prd,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            =>  $total_page,
            'limit'                 =>  $limit,
            'page'                  =>  $page,
            'base_url'              =>  build_layout_url("home/low_to_high_prd")
        ]);

    }
    function selling_products(){
        //TIN TỨC
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // Phân trang
        $limit =!empty($_GET['limit']) ? $_GET['limit'] : 10;
        $limit = max(1, $limit);

        $page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $page = max(1, $page); 
        $offset = ($page - 1) * $limit;
        $ProductModel = $this->model("ProductModel");                
        $total_products = $ProductModel->countProducts();  
        $selling_products = $ProductModel->getSellingProducts($offset, $limit);  
        $total_page = ceil ($total_products / $limit);    
        $this->view("selling_products", [
            'selling_products'     => $selling_products,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            =>  $total_page,
            'limit'                 =>  $limit,
            'page'                  =>  $page,
            'base_url'              =>  build_layout_url("home/selling_products")
        ]);

    }
    public function product (){
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        $ProductModel = $this->model("ProductModel");
        $product = $ProductModel->getProducts();
        $this->view("product",[
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'product'    =>  $product,
        ]);
    }
    public function cart (){
         //TIN TỨC
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        $this->view("cart",[
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
        ]);
    }
    public function user (){
        //TIN TỨC
       $NewsCategoryModel = $this->model("NewsCategoryModel");
       $news_categories = $NewsCategoryModel->getCategories();  
       // danh mục sản phẩm
       $ProductCatModel = $this->model("CategoryModel");
       $product_categories = $ProductCatModel->getCategories(); 
       // call user 
       $ProductModel = $this->model("ProductModel");
       $user = $ProductModel->callUser();
       $user_id = $user[0]['id'];
       $order = $ProductModel->callOrder($user_id);
       $this->view("user",[
           'news_categories'       =>  $news_categories,
           'product_categories'    =>  $product_categories,
           'user'                  => $user,
           'order'                   => $order,
       ]);
   }
    public function add_to_cart(){
        $number_cart = isset($_POST['number_cart'])?$_POST['number_cart']:0;
        $prod_id = $_POST['id']??0; 
        $ProductModel = $this->model("ProductModel");
        $product_shopping = $ProductModel->shoppingCart();
        foreach($product_shopping as $cat){
        if(!isset($_SESSION["cart"])){
            $cart[$prod_id] = array(
                'id'  => $cat[0],
                'img' =>$cat[1],
                'prd_name' =>$cat[2],
                'price' =>$cat[3],
                'number' => $number_cart + 1,
            );
        }else{
            $cart = $_SESSION["cart"];
            if (array_key_exists($prod_id, $cart)){
                $cart[$prod_id] = array(
                    'id'  => $cat[0],
                    'img' =>$cat[1],
                    'prd_name' =>$cat[2],
                    'price' =>$cat[3],
                    'number' =>(int)$cart[$prod_id]["number"] +1 + $number_cart
                );
            }else{
                $cart[$prod_id] = array(
                    'id'  => $cat[0],
                    'img' =>$cat[1],
                    'prd_name' =>$cat[2],
                    'price' =>$cat[3],
                    'number' =>1 + $number_cart
                );
            }
        }  
    }  
    $_SESSION["cart"] = $cart;
    }
    public function payment (){
        //TIN TỨC
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // get oder
        $ProductModel = $this->model("ProductModel");
        $error = '';
        if(!empty($_POST)){            
            if(isset($_POST) && count($_POST) > 0) {
                $name =$_POST['name']??'';
                $email =$_POST['email']??'';
                $phone =  $_POST['phone']??'';
                $addres = $_POST['addres']??'';
                $id_payment = $_POST['payment'];
            }
            if($name==""){
                $error = "Vui lòng nhập tên";
            }else if($email==""){
                $error = "Vui lòng nhập email";
            }else if($phone==""){
                $error = "Vui lòng số điện thoại";
            }else if($addres==""){
                $error = "Vui lòng nhập addres";
            }else{
                $result = $ProductModel -> getOrder($name, $email, $phone, $addres, $id_payment);
                if($result){
                    redirect(build_layout_url('home/delete_cart'));        
                }else{
                    $error = "Đã có lỗi xảy ra, vui lòng thử lại sau";
                }
            }            
        }
        $this->view("payment",[
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
        ]);
    }
    public function delete_cart (){
            if(isset($_SESSION['cart'])){
                unset($_SESSION['cart']);            
            } 
        redirect(build_layout_url("home"));
    }
    public function delete_cart_prd (){
        $id = $_GET['id'];
        // var_dump($id);
        // die();
        if (isset($_GET['id'])){
            if(isset($_SESSION['cart'][$id])){
                unset($_SESSION['cart'][$id]);            
            } 
        }
    redirect(build_layout_url("home/cart"));
    }
    public function order_prd (){
        //TIN TỨC
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // get oder prd
        $ProductModel = $this->model("ProductModel");
        $order_prd = $ProductModel->callOrderPrd();
        $this->view("order_prd",[
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'order_prd'             => $order_prd
        ]);
    }


}
?>
