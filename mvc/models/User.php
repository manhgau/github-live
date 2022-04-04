<?php
class User extends db {
 public function register ($name, $email, $password, $phone, $addres, $ad_id){
    $sql="SELECT COUNT(*) AS so_luong FROM user WHERE `email` = '".$email."' AND `name` = '".$name."' ";
    $query = mysqli_query($this->con, $sql); 
    while($row = mysqli_fetch_array($query)){
        $count = $row['so_luong'];
      }
    if ($count > 0){
        return false;
    }else{
        $sql_reg ="INSERT INTO `user`(`name`,`email`,`password`,`phone`,`addres`,`ad_id`) VALUES ('$name', '$email', '$password', '$phone', '$addres', '$ad_id')";        
        mysqli_query($this->con, $sql_reg); 
        // var_dump($sql_reg);
        // die; 
        return true;
    }

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
          $error = "Tài khoản không tồn tại";
      }
  }  
 }