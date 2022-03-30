<?php
class NewsCategoryModel extends db {
    public function getCategories(){    
        $sql_category_new = "SELECT * FROM category_new ";
        $query_category_new = mysqli_query($this->con, $sql_category_new);    
        $categories = [];
        while($row_category_new = mysqli_fetch_array($query_category_new)){
            $categories[] = $row_category_new;
        }
        return $categories;
    }
}