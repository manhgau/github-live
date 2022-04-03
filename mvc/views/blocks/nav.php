
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
                        $cart = $_SESSION["cart"]??[];
                        $number = 0;
                        if(is_array($cart) && count($cart) > 0){
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
                                        <h4 class="header-cart--pro">Sản phẩm mới thêm</h4>
                                        <div class="cart-list--pro">
                                            <?php   
                                            $cart = $_SESSION["cart"]??[];         
                                            if(isset($cart) && is_array($cart) && count($cart) > 0){
                                                foreach($cart as $cat){  ?>
                                            <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$cat['id'].""; ?>">
                                                    <div class="cart-notify--pro">
                                                        <div class="cart-pro-item">
                                                            <div class="cart-pro-item--img">
                                                            <img class="cart-img" style="<img style ="width:100px" src="<?php echo DOMAIN;?>/public/upload/product/<?php echo $cat['img']; ?>" alt="" >
                                                            </div>
                                                            <div class="cart-pro-item--name">
                                                            <span class="pro-name"><?php echo $cat['prd_name']; ?></span> 
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
                                                                <span><?php echo number_format($cat['price'], 0, ',', ' '); ?>₫</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                            </a>

                                            <?php }
                                                }
            
                                            ?>
                                        </div>
                                        <div class="footer-cart">
                                            <span class="footer-number"><?php echo $number;?> sản phẩm đã được thêm</span>
                                            <a class="footer-link" href="<?php echo build_layout_url("home/cart"); ?>">Xem giỏ hàng</a>
                                        </div>
                            <?php } ?>
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