<?php   
class signup extends controller{ 
    public function register (){
        $UserModel = $this->model("User");       
        // get data
        $error = '';
        if(!empty($_POST)){            
            if(isset($_POST) && count($_POST) > 0) {
                $name =$_POST['name']??'';
                $email =$_POST['email']??'';
                $password =  $_POST['password']??'';
                $phone =  $_POST['phone'];
                $addres = $_POST['addres']??'';
                $ad_id = $_POST['ad_id']??'';
            }
            if($name==""){
                $error = "Vui lòng nhập tên";
            }else if($email==""){
                $error = "Vui lòng nhập email";
            }else if($password==""){
                $error = "Vui lòng nhập password";
            }else if($addres==""){
                $error = "Vui lòng nhập addres";
            }else if($phone==""){
                $error = "Vui lòng nhập số điện thoại";
            }else if($ad_id==""){
                $error = "Vui lòng nhập level";
            }else{
                $result = $UserModel -> register($name, $email, $password, $phone, $addres, $ad_id);
                if($result){
                    redirect(build_layout_url('home'));        
                }else{
                    $error = "Đã có lỗi xảy ra, vui lòng thử lại sau";
                }
            }            
        }
        // get data
        $this->layout = 'main_signup';        

        //
        $user_level = $UserModel->getUserLevel();
        
        $this ->view("register",[
            'user_level'    =>  $user_level,
            'error' => $error,
            'name' => $name,
                'email' => $email,
            'addres' => $addres,
        ]);
    }
    public function login (){
    $error = "";
    $email = $password = "";
    $this->layout = 'main_signup';
    $UserModel = $this->model("User");   
    if (!empty($_POST)){
        $email =$_POST['email']??'';
        $password =  $_POST['password']??'';
        if($email==""){
            $error = "Vui lòng nhập email";
        }elseif ($password==""){
            $error = "Vui lòng nhập password";
        }else{
            $result = $UserModel -> login($email, $password);
        }
    }
    $this ->view("login",[
        'email' => $email,
    ]);
}
    public function logout(){
        if (isset($_POST)){
            //Xóa session
            if(isset($_SESSION['user_id'])){
                unset($_SESSION['user_id']);
                unset($_SESSION['ad_id']);            
            }  
            if(isset($_SESSION['name'])){
                unset($_SESSION['name']);
            }
            if(isset($_SESSION['email'])){
                unset($_SESSION['email']);
            }  
            if(isset($_SESSION['phone'])){
                unset($_SESSION['phone']);
            } 
            if(isset($_SESSION['addres'])){
                unset($_SESSION['addres']);
            }   
        }
        redirect(build_layout_url("home"));
    }
}