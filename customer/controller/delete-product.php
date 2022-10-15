<?php
    include '../../model/connect.php';
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE productId = $id";
    connect($query);
    header("Location:../index.php?act=product");
?>