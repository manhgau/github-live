<style>
    .container{
        padding: 25px 0;
        width: 100%;
        height: 800px;
        background: #4caf50;
        border-radius: 0;
    }
    .form-control{
        padding: 10px 5px;
        border: 1px solid #999;
        border-radius: 5px;
        outline: none;
    }
    .form-group{
        display: flex;
        flex-direction: column;
    }
    .form-wrap{
        width: 40%;
        background: #fff;
        padding: 15px;
        border-radius: 10px;
        margin-top: 40px;
        margin-left: 50%;
    }
    .header{
        font-size: 20px;
        padding: 10px 0;
    }
    .btn-success{
        border-radius: 5px;
        padding: 10px;
        background: #ffc107;;
        border: none;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-top: 15px;
        font-size: 18px;

    }
    .btn-success:hover{
        opacity: 0.7;
    }
    .container-footer{
        text-align: center;
        margin-top: 20px;
    }
    .link-login{
        text-decoration: none;
        color: #8bc34a;
    }
</style>
<div class="container">

    <div class="container-body">
        <form action="<?php echo build_layout_url("signup/register"); ?>" class="form-wrap" method="post">  
            <?php
              if(isset($error) && $error!=""){
                  echo "<div style='color:red;'>".$error."</div>";
              }
            ?>
            <div class="container-header">
                <h1>Đăng ký</h1>
            </div>
            <div class="form-group">
              <label class="header">Nhập họ và tên:</label>
              <input type="text" class="form-control" value="<?php echo $name;?>"  name="name" placeholder = "Nhập họ và tên ">
          </div>
          <div class="form-group">
              <label class="header">Nhập email:</label>
              <input type="email" class="form-control" value="<?php echo $email;?>" name="email" placeholder = "Nhập email ">
          </div>
          <div class="form-group">
              <label class="header">Nhập mật khẩu:</label>
              <input type="password" class="form-control" name="password" placeholder = "Nhập password">
          </div>
          <div class="form-group">
              <label class="header">Nhập số điện thoại:</label>
              <input type="text" class="form-control" name="phone" placeholder = "Nhập số điện thoại">
          </div>
          <div class="form-group">
              <label class="header">Nhập địa chỉ:</label>
              <input type="text" class="form-control" value="<?php echo $addres;?>"  name="addres" placeholder = "Nhập địa chỉ">
          </div>
          <button class="btn btn-success" type="submit">Đăng ký</button>
          <div class="container-footer">
                    <span>
                        Bạn đã có tài khoản?
                        <a class="link-login" href="<?php echo build_layout_url("signup/login"); ?>">Đăng nhập</a>
                    </span>
          </div>
        </form>
    </div>
</div>