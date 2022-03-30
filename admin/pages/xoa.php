<?php

    $id = $_GET['id'];
    $sql = "DELETE FROM products where id = $id";
    $query = mysqli_query($connect, $sql);
    redirect(build_layout_url("danhsach", true));   
?>

