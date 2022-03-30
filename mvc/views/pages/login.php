<style>
    .container{
        padding: 25px 0;
        width: 100%;
        height: 600px;
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
        margin-top: 50px;
        margin-left: 50%;
    }
    .header{
        font-size: 20px;
        padding: 10px 0;
    }
    .btn-success{
        border-radius: 5px;
        padding: 10px;
        background: #8bc34a;
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
    .link-registration{
        text-decoration: none;
        color: #ffc107;
    }
</style>

<div class="container">

    <div class="container-body">
        <form class="form-wrap" method="post">  
            <?php
              if(isset($error) && $error!=""){
                  echo "<div style='color:red;'>".$error."</div>";
              }
            ?>
            <div class="container-header">
                <h1>Đăng nhập</h1>
            </div>
          <div class="form-group">
              <label class="header">Nhập email:</label>
              <input type="email" class="form-control" value="<?php echo $email;?>" name="email" placeholder = "Nhập email đăng nhập">
          </div>
          <div class="form-group">
              <label class="header">Nhập mật khẩu:</label>
              <input type="password" class="form-control" name="password" placeholder = "Nhập password đăng nhập">
          </div>
          <button class="btn btn-success" type="submit">Đăng nhập</button>
          <div class="container-footer">
                    <span>
                        Bạn chưa có tài khoản?
                        <a class="link-registration" href="<?php echo build_layout_url("signup/register"); ?>">Đăng ký</a>
                    </span>
          </div>
        </form>
    </div>
</div>