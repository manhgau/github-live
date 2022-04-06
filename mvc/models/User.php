<?php
class User extends db {
 public function checkUserExitst ($email){
    $sql="SELECT COUNT(*) AS so_luong FROM user WHERE `email` = '".$email."'";
    $query = mysqli_query($this->con, $sql); 
    while($row = mysqli_fetch_array($query)){
        $count = $row['so_luong'];
      }
    if ($count > 0){
        return true;
    }else{        
        return false;
    }

 }

 public function register ($name, $email, $password, $phone, $addres, $ad_id){
    $sql_reg ="INSERT INTO `user`(`name`,`email`,`password`,`phone`,`addres`,`ad_id`) VALUES ('$name', '$email', '$password', '$phone', '$addres', '$ad_id')";        
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

 public function login ($email){
                    
      $sql_user = "SELECT * FROM user WHERE `email` = '".$email."' ";                    
      $query_user = mysqli_query ($this->con , $sql_user);  
      $row_user =mysqli_fetch_array ($query_user); 
      return $row_user;
  }  
 }