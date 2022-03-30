<?php
class Partner extends db {
    public function getPartner(){
        $categories = [];   //array();
        $sql_partner= "SELECT * FROM partner ";
        $query_partner = mysqli_query($this->con, $sql_partner);

        while($row_partner = mysqli_fetch_array($query_partner)) {       
            $categories[] = $row_partner;
        }                                              
        return  $categories;

    }
}