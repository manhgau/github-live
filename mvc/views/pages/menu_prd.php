<div class="row"  >
            <ol class="breadcrumb" >
                <li>Trang chủ</li>
                <li class="separation">Danh mục sản phẩm</li>
                <li class="separation">Tất cả sản phẩm</li>
                            
            </ol>
            <div class="shop-sort-bar">
                <span class="shop-sort-bar_label">Sắp xếp theo</span>
                <div class="menu-list">
                    <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$cat['id'].""; ?>">
                        <div class="menu-item">Mới Nhất</div>
                    </a>
                    <a class="form-link" href="<?php echo build_layout_url("home/new")."&id=".$cat['id'].""; ?>">
                        <div class="menu-item">Nộ Bật</div>
                    </a>
                    
                    <a class="form-link" href="<?php echo build_layout_url("home/product")."&id=".$cat['id'].""; ?>">
                        <div class="menu-item">Bán Cháy</div>
                    </a>
                    <div class="menu-item menu-item-leght ">
                        <span>Giá</span>
                        <i class=" fas fa-chevron-down"></i>
                        <ul class="sort-list">
                            <li class="sort-item">Giá: Từ thấp đến cao</li>
                            <li class="sort-item">Giá: Từ cao đến thấp</li>
                        </ul>
                    </div>
                </div>
            </div>
</div>
