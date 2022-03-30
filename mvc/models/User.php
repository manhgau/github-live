<?php
class User extends db {
 public function register ($name, $email, $password, $addres, $ad_id ){
    $sql_reg ="INSERT INTO user(`name`,`email`,`password`,`addres`,`ad_id`) VALUES ('$name', '$email', '$password', '$addres', '$ad_id')";        
    mysqli_query($this->con, $sql_reg); 
    // var_dump($sql_reg);
    // die; 
    return true;

 }

 public function getUserLevel (){
    $level = [];
    $sql = "SELECT * FROM admin ";
    $query = mysqli_query($this->con, $sql);        
    while($row = mysqli_fetch_array($query)){
      $level[] = $row;
    }
   return $level;   
}

 public function login ($email, $password){
                    
      $sql_user = "SELECT * FROM user WHERE `email` = '".$email."' AND `password` = '".$password."' ";                    
      $query_user = mysqli_query ($this->con , $sql_user);  
      $row_user =mysqli_fetch_array ($query_user); 
      $my_admin = $row_user['ad_id'];        
      if(is_array($row_user) && count($row_user) > 0  ){                                      
          $_SESSION['user_id'] = $row_user['id'];                
          $_SESSION['name'] = $row_user['name'];   
          //thực hiện login               
              if($my_admin == 1){                
                  $_SESSION['ad_id'] = $row_user['ad_id'];                                                                                                
                  redirect(build_layout_url("productadmin/danhsach", true));                        
              }else{                                     
                  redirect(build_layout_url("home"));
              }                           
      }else{
          $error = "Tài khoản không tồn tại";
      }
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
   }
   redirect(build_layout_url("home"));
}
 }