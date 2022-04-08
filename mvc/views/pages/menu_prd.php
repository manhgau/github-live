<div class="row"  >
            <ol class="breadcrumb" >
                <li>Trang chủ</li>
                <li class="separation">Danh mục sản phẩm</li>
                <li class="separation">Tất cả sản phẩm</li>
                            
            </ol>
            <div class="shop-sort-bar">
                <span class="shop-sort-bar_label">Sắp xếp theo</span>
                <div class="menu-list">
                    <a class="form-link" href="<?php echo build_layout_url("home/new_product"); ?>">
                        <div class="menu-item">Mới Nhất</div>
                    </a>
                    <a class="form-link" href="<?php echo build_layout_url("home/featured_products"); ?>">
                        <div class="menu-item">Nổi Bật</div>
                    </a>
                    
                    <a class="form-link" href="<?php echo build_layout_url("home/selling_products"); ?>">
                        <div class="menu-item">Bán Cháy</div>
                    </a>
                    <div class="menu-item menu-item-leght ">
                        <span>Giá</span>
                        <i class=" fas fa-chevron-down"></i>
                        <ul class="sort-list">
                            <a class="form-link" href="<?php echo build_layout_url("home/high_to_low_prd"); ?>">
                                <li class="sort-item">Giá: Từ thấp đến cao</li>
                            </a>
                            <a class="form-link" href="<?php echo build_layout_url("home/low_to_high_prd"); ?>">
                                <li class="sort-item">Giá: Từ cao đến thấp</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
</div>
