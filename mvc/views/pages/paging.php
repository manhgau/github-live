<div class="page-wrap">
    <?php
    if ($page > 1) {
        $prev_page =$page - 1;
        ?>
        <a class = "page-item" href="<?php echo build_layout_url("home/all_products"); ?>&limit=<?=$limit?>&page=<?=$prev_page?>"><i class="fas fa-angle-left"></i></a>
        <?php
        }
    ?>
        <?php for ($num = 1; $num <= $total_page; $num ++) { 
             if ($num != $page) { 
                if ($num > $page - 3 && $num < $page + 3 ) { ?>
                    <a class = "page-item" href="<?php echo build_layout_url("home/all_products"); ?>&limit=<?=$limit?>&page=<?=$num?>"><?=$num?></a>
                <?php }
            } else {?>
                <strong class= "current-page page-item"><?=$num?></strong>
            <?php }
        }?>
        <?php 
            if ($page > 0 && $page < $total_page) {
                $next_page =$page + 1;
                ?>
                <a class = "page-item" href="<?php echo build_layout_url("home/all_products"); ?>&limit=<?=$limit?>&page=<?=$next_page?>"><i class="fas fa-angle-right"></i></a>
                <?php
    }

    ?>
</div>