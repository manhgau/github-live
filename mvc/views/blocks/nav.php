
        <div class="nav-wrap">
                <div class="nav-color mobile">
                    <div class="nav-header gird">
                        <div class="header-note">Freeship cho đơn hàng 500K</div>
                        <div class="header-logo">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-google"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-youtube"></i>
                        </div> 
                    </div>  
                </div>
                <div id="myHeader" class="header-category gird">
                    <div class="category-logo">
                        <a class="form-link" href="<?php echo build_layout_url("home"); ?>">  
                            <img src="<?php echo DOMAIN;?>/public/img/logo_medium.webp" alt="Hogwarts" class="category-logo-img">
                        </a>
                    </div>
                    <div class="category-search mobile">
                        <div class="search">
                            <input type="text" name="" id="" placeholder="Tìm kiếm sản phẩm" class="input-search">
                            <i class="fas fa-search"></i>
                            <div class="header__search-history">
                                <h3 class="header__search-history-header">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Đông trùng hạ thảo</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">Thực phẩm chức năng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-heading">                         
                            <div class="nav-heading-text color">Trang chủ</div>
                    <div class="nav-heading-text">
                        <span class="category-hover">Sản phẩm</span>
                        <i class="nav-item fas fa-chevron-down"></i>
                        <div class="mega-menu-1">
                            <!-- Danh mục -->
                            <?php                           
                                 require_once "./mvc/views/blocks/category.php"
                                 ?>
                                    <!-- END danh mục  -->
                                </div>
                            </div>
                            <div class="nav-heading-text">
                                <span class="category-hover">Tin tức</span>
                             <i class="nav-item fas fa-chevron-down"></i>
                             <!-- Danh mục tin tức -->
                             <?php
                                require_once "./mvc/views/blocks/category_new.php"                                        
                            ?>
                                    <!-- END danh mục tin tức  -->
                         </div>
                         <div class="nav-heading-text category-hover">Giới thiệu</div>
                         <div class="nav-heading-text category-hover">Liên hệ</div>
                         <div class="nav-heading-text category-hover">Hệ thống cửa hàng</div>
                        </div>
                    </div>
                    <?php
                        $cart= $_SESSION["cart"];
                        $number = 0;
                        if(isset($_SESSION["cart"])){
                        foreach($cart  as $value){
                            $number += (int)$value["number"];
                        }};
                    ?>
                    <div class="cart">
                        <a class="form-link" href="<?php echo build_layout_url("home/cart"); ?>">
                        <i class="cart-item fa fa-shopping-cart"></i>
                        <span class="item-notice item-notice_cart "><?php echo $number;?></span>
                        </a>
                        <div class="cart-notify">
                            <?php 
                            if($number == 0){ ?>
                            <!-- ko có sản phẩm -->
                                <div class="cart-notify--nopro">
                                    <img src="<?php echo DOMAIN;?>/public/img/giỏ-hàng-rỗng.png" alt="" class="header__basket-no-basket">
                                    <p class="header__basket-no-basket-text">Chưa có sản phẩm</p>
                                </div>

                          <?php  }else{ ?>
                            <!-- có sản phẩm ở giỏ hàng -->
                            <div class="cart-notify--pro">
                                <div class="cart-pro-item">
                                    <div class="cart-pro-item--img">
                                    <img class="cart-img" src="<?php echo DOMAIN;?>/public/img/fd8f5d3618960cc47a3e39f7b5e8d868.jpg" alt="" >
                                    </div>
                                    <div class="cart-pro-item--name">
                                     <span class="pro-name">Sản phẩm 1</span> 
                                     <!-- <div class="pro-category-wrap">
                                         <label for="">Thể loại:</label>
                                         <span class="pro-category">Thực phẩm chức năng</span>
                                     </div>
                                     <div>
                                         <label for="">Số lượng:</label>
                                         <span class="pro-number">4</span>
                                     </div> -->
                                    </div>
                                    <div class="cart-pro-item--price">
                                        <span>789 000</span>
                                    </div>
                                </div>
                                <div class="total">
                                    <label for="">Tổng tiền:</label>
                                    <span>900 000</span>
                                </div>

                            </div>

                          <?php }
                            ?>
                         </div>
                    </div>
                    <div class="category-login mobile">
                        <?php
                    $check = check_login();
                    if($check==true){ 
                        $name = isset($_SESSION['name'])?$_SESSION['name']:'';
                        ?>
                    <div>
                        <div class="user-name">
                            <div class="user">
                                <i class="far fa-user-circle"></i>
                                <p><?php echo $name; ?></p>
                            </div>
                            <div class="logout-wrap">
                                <form class="form-logout" method="post" action="<?php echo build_layout_url("signup/logout"); ?>">                 
                                    <button   button class="btn btn-success" type="submit">Đăng xuất</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="form-login">
                        <a class="link-login" href="<?php echo build_layout_url("signup/login"); ?>">Đăng nhập</a>
                        <a class="link-register" href="<?php echo build_layout_url("signup/register"); ?>">Đăng ký</a>
                    </div>
                    <?php }
                ?> 
                 </div>
                 <div class="nav-mobile">
                     <i class="fas fa-shopping-cart"></i>
                     <i class="fas fa-search"></i>
                     <i class="js-open-menu fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>