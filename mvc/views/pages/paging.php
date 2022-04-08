<div class="page-wrap">
                     <?php
                    if ($current_page > 1) {
                     $prev_page =$current_page - 1;
                     ?>
                        <a class = "page-item" href="<?php echo build_layout_url("home/all_products"); ?>?per_page_all=<?=$item_perz_page?>&page_all=<?=$prev_page?>"><i class="fas fa-angle-left"></i></a>
                     <?php
                     }
                    ?>
                     <?php for ($num = 1; $num <= $total_page; $num ++) { ?>
                         <?php if ($num != $current_page) { ?>
                             <?php if ($num > $current_page - 3 && $num < $current_page + 3 ) { ?>
                                 <a class = "page-item" href="<?php echo build_layout_url("home/all_products"); ?>?per_page_all=<?=$item_perz_page?>&page_all=<?=$num?>"><?=$num?></a>
                             <?php } ?>
                        <?php } else {?>
                             <strong class= "current-page page-item"><?=$num?></strong>
                         <?php }?>
                     <?php }?>
                     <?php 
                                     if ($current_page > 0 && $current_page < $total_page) {
                                         $next_page =$current_page + 1;
                                         ?>
                                         <a class = "page-item" href="<?php echo build_layout_url("home/all_products"); ?>?per_page_all=<?=$item_perz_page?>&page_all=<?=$next_page?>"><i class="fas fa-angle-right"></i></a>
                                         <?php
                                         }

                    ?>
</div>