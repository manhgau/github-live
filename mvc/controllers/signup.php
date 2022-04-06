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
                $password = password_hash($password, PASSWORD_DEFAULT);
                $phone =  $_POST['phone'];
                $addres = $_POST['addres']??'';
                $ad_id = $_POST['ad_id']??'2';
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
            }else{
                $checkEmailExist = $UserModel->checkUserExitst($email);
                if($checkEmailExist==true){
                    $error = "Tài khoản đã tồn tại, vui lòng nhập email khác";
                }else{
                    $result = $UserModel -> register($name, $email, $password, $phone, $addres, $ad_id);
                    if($result){
                        $UserModel -> login($email, $password);
                        redirect(build_layout_url('home'));        
                    }else{
                        $error = "Đã có lỗi xảy ra, vui lòng thử lại sau";
                    }
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
        //$email = $password = "";
        $this->layout = 'main_signup';
        $UserModel = $this->model("User");   
        $error = '';
        if (!empty($_POST)){
        $email =$_POST['email']??'';
        $password =  $_POST['password']??'';
        if($email==""){
            $error = "Vui lòng nhập email";
        }elseif ($password==""){
            $error = "Vui lòng nhập password";
        }else{
            $row_user = $UserModel -> login($email);
            $my_admin = $row_user['ad_id'];
            $hash = $row_user['password'];
            $user_email = $row_user['email'];
            //die($hash) ;
            if($user_email == $email ){    
                //var_dump($user_email);
                //var_dump($email);
                // $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
 
                // if (password_verify('rasmuslerdorf', $hash)) {
                //     echo 'Password is valid!';
                // } else {
                //     echo 'Invalid password.';
                // }
                var_dump($password);
                var_dump($hash);
                var_dump(password_verify ((String)$password , (String)$hash));
                die;
                if (password_verify ($password , $hash)){ 
                    print "Logged in";
                        $_SESSION['user_id'] = $row_user['id'];         
                        $_SESSION['name'] = $row_user['name'];  
                        $_SESSION['email'] = $row_user['email'];  
                        $_SESSION['phone'] = $row_user['phone'];  
                        $_SESSION['addres'] = $row_user['addres'];  
                        //thực hiện login               
                            if($my_admin == 1){                
                                $_SESSION['ad_id'] = $row_user['ad_id'];                                                                                                
                                redirect(build_layout_url("productadmin/danhsach", true));                        
                            }else{                                     
                                redirect(build_layout_url("home"));
                            }                           
                }else{
                        $error = "Mật khẩu không chính xác";
                        print "Password Incorrect";
                    }
            }else{
              $error = "Tài khoản không tồn tại";
          }
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