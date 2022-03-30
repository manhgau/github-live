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
    function all_products(){    
        //Tin tức
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();  
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // danh sách sản phẩm mới
        $ProductModel = $this->model("ProductModel");
        $all_products = $ProductModel->getAllProducts();  
        // Phân trang
        $item_perz_page =!empty($_GET['per_page_all']) ? $_GET['per_page_all'] : 5;
        $item_perz_page = max(1, $item_perz_page);

        $current_page = !empty($_GET['page_all']) ? $_GET['page_all'] : 1;
        $current_page = max(1, $current_page); 
        $total_products = $ProductModel->countProducts();  
        $total_page = ceil ($total_products / $item_perz_page);           
        $this->view("all_products",[
            'all_products'         => $all_products,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            => $total_page,
            'item_perz_page'        => $item_perz_page,
            'current_page'          => $current_page
        ]);
    }
    function new_product(){   
        $NewsCategoryModel = $this->model("NewsCategoryModel");
        $news_categories = $NewsCategoryModel->getCategories();     
        // danh mục sản phẩm
        $ProductCatModel = $this->model("CategoryModel");
        $product_categories = $ProductCatModel->getCategories(); 
        // danh sách sản phẩm mới
        $ProductModel = $this->model("ProductModel");
        $new_product = $ProductModel->getNewProducts();    
        // Phân trang
        $item_perz_page =!empty($_GET['per_page_all']) ? $_GET['per_page_all'] : 5;
        $item_perz_page = max(1, $item_perz_page);

        $current_page = !empty($_GET['page_all']) ? $_GET['page_all'] : 1;
        $current_page = max(1, $current_page); 
        $total_products = $ProductModel->countProducts();  
        $total_page = ceil ($total_products / $item_perz_page);       
        $this->view("new_product",[
            'new_product'         => $new_product,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            => $total_page,
            'item_perz_page'        => $item_perz_page,
            'current_page'          => $current_page
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
        // SẢN PHÂM NỔI BẬT
        $ProductModel = $this->model("ProductModel");
        $featured_products = $ProductModel->getFeatureProducts();
        // Phân trang
        $item_perz_page =!empty($_GET['per_page_all']) ? $_GET['per_page_all'] : 5;
        $item_perz_page = max(1, $item_perz_page);

        $current_page = !empty($_GET['page_all']) ? $_GET['page_all'] : 1;
        $current_page = max(1, $current_page); 
        $total_products = $ProductModel->countProducts();  
        $total_page = ceil ($total_products / $item_perz_page);   
        $this->view("featured_products", [
            'featured_products'     => $featured_products,
            'news_categories'       =>  $news_categories,
            'product_categories'    =>  $product_categories,
            'total_page'            => $total_page,
            'item_perz_page'        => $item_perz_page,
            'current_page'          => $current_page
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
        
        $this->view("cart",[

        ]);
    }
    public function add_to_cart(){
        $prod_id = $_POST['id']??0; 
        $ProductModel = $this->model("ProductModel");
        $product_shopping = $ProductModel->shoppingCart();
        foreach($product_shopping as $cat){
        if(!isset($_SESSION["cart"])){
            $cart[$prod_id] = array(
                'img' =>$cat[0],
                'prd_name' =>$cat[1],
                'price' =>$cat[2],
                'quantity' =>$cat[3],
                'number' =>1
            );
        }else{
            $cart = $_SESSION["cart"];
            if (array_key_exists($prod_id, $cart)){
                $cart[$prod_id] = array(
                    'img' =>$cat[0],
                    'prd_name' =>$cat[1],
                    'price' =>$cat[2],
                    'quantity' =>$cat[3],
                    'number' =>(int)$cart[$prod_id]["number"] +1
                );
            }else{
                $cart[$prod_id] = array(
                    'img' =>$cat[0],
                    'prd_name' =>$cat[1],
                    'price' =>$cat[2],
                    'quantity' =>$cat[3],
                    'number' =>1
                );
            }
        }  
    }  
    $_SESSION["cart"] = $cart;
    $number = 0;
    foreach($cart  as $value){
        $number += (int)$value["number"];
    };
    echo $number;
    // echo "<prE>";
    // print_r($_SESSION["cart"]);     
    }



}
?>
