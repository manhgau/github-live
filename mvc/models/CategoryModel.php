<?php
class CategoryModel extends db {
    //Lấy danh sách danh mục 2 cấp
     public function getCategories(){    
        $categories = [];   //array();
        
        $sql_get_parent_category = "SELECT * FROM product_category WHERE parent_id = 0";
        $query_parent_category =  mysqli_query ($this->con , $sql_get_parent_category);  
        while($row = mysqli_fetch_array($query_parent_category)){                 
            $categories[$row['category_id']] = $row;
        }    
        if(is_array($categories) && count($categories) > 0){
            //lấy danh mục cấp 2
            foreach($categories as $cat){
                $category_id = $cat['category_id'];                      
                $sql_get_child_category = "SELECT * FROM product_category WHERE parent_id = $category_id ";
                $query_child_category =  mysqli_query ($this->con , $sql_get_child_category); 
                $categories[$category_id]['childs'] = [];
                while($cat_child = mysqli_fetch_array($query_child_category)){    
                    $categories[$category_id]['childs'][] = $cat_child;                          
                }                
            }
        }
        
        return  $categories;
    }
}