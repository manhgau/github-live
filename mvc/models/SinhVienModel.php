<?php
class SinhVienModel extends db {
    public function GetSV(){
        return "Nguyễn Văn THuận";
    }
    public function Tong($n, $m){
        return $n + $m;
    }
    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }
}

?>