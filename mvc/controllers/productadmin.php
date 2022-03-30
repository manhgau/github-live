<?php
    class productadmin extends controller{
        public function danhsach (){
        $this->layout = 'admin';
            
            $AdminModel = $this->model("AdminModel");
            $products = $AdminModel->DanhSach();  
            $this-> view("danhsach",[
                'products'  => $products
            ]);
        }
        public function them (){
            $this->layout = 'admin';
            $error = "";
            $AdminModel = $this -> model("AdminModel");
            $categories = $AdminModel->getCategories();
            if(isset($_POST) && count($_POST) > 0) {                
                $prd_name =$_POST['prd_name']??'';
                $price =$_POST['price']??'';
                $price_old =$_POST['price_old']??'';
                $image =$_FILES['image']['name'];
                $img_tmp =$_FILES['image']['tmp_name']??'';
                $file_save = UPLOAD_DIR."/product/".$image;
                move_uploaded_file($img_tmp, $file_save); 
                $quantity =$_POST['quantity']??'';
                $description =$_POST['description']??'';
                $sold = $_POST['sold']??'';
                $category_id =$_POST['category_id']??'';
                $hot = isset($_POST['hot'])?$_POST['hot']:0;
            }
            if($prd_name==""){
                $error = "Vui lòng nhập tên";
            }else if($price==""){
                $error = "Vui lòng nhập giá sản phẩm";
            }else if($quantity==""){
                $error = "Vui lòng nhập số lượng sản phẩm";
            }else if($description==""){
                $error = "Vui lòng nhập addres";
            }else if($sold==""){
                $error = "Vui lòng nhập số lượng sản phẩm đã bán";
            }else{
                $result = $AdminModel -> Them($image, $prd_name, $price, $price_old, $quantity, $description, $sold, $category_id, $hot);
                if($result){
                    redirect(build_layout_url('productadmin/danhsach'));        
                }else{
                    $error = "Đã có lỗi xảy ra, vui lòng thử lại sau";
                }

            }
            $this-> view("them",[
                'categories' => $categories
            ]);
        }
        public function sua (){
            $this->layout = 'admin';
            $error = "";
            $AdminModel = $this -> model("AdminModel");
            $categories = $AdminModel->getCategories();
            $products = $AdminModel->DanhSach();
            if(isset($_POST) && count($_POST) > 0) {
                if($_FILES['image']['name']==''){
                    $image= $products['img'];
                }else{
                    $image= $_FILES['image']['name'];
                    $image_tmp = $_FILES['image']['tmp_name'];
                    $file_save = UPLOAD_DIR."/product/".$image;
                    move_uploaded_file($image_tmp, $file_save);
                }
                $prd_name =$_POST['prd_name']??'';
                $price =$_POST['price']??'';
                $price_old =$_POST['price_old']??'';
                $quantity =$_POST['quantity']??'';
                $description =$_POST['description']??'';
                $sold =$_POST['sold'];
                $category_id =$_POST['category_id']??'';
                $hot = ( isset($_POST['hot']) && $_POST['hot']==1 )?1:0;
            }
            if($prd_name==""){
                $error = "Vui lòng nhập tên";
            }else if($price==""){
                $error = "Vui lòng nhập giá sản phẩm";
            }else if($quantity==""){
                $error = "Vui lòng nhập số lượng sản phẩm";
            }else if($description==""){
                $error = "Vui lòng nhập addres";
            }else if($sold==""){
                $error = "Vui lòng nhập số lượng sản phẩm đã bán";
            }else{
                $result = $AdminModel -> Sua($image, $prd_name, $price, $price_old, $quantity, $description, $sold, $category_id, $hot);
                if($result){
                    redirect(build_layout_url('productadmin/danhsach'));        
                }else{
                    $error = "Đã có lỗi xảy ra, vui lòng thử lại sau";
                }

            }


            $this-> view("sua",[
                'categories' => $categories,
                'products'  => $products,
                'prd_name' => $prd_name,
                'price' => $price,
                'price_old' => $price_old,
                'quantity' => $quantity,
                'description' => $description,
                'sold' => $sold,
            ]);
        }
        public function xoa (){ 
            $AdminModel = $this -> model("AdminModel");
            $AdminModel->Xoa();
            redirect(build_layout_url("productadmin/danhsach"));  
        }
    }