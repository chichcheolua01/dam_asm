<?php
    include '../../model/connect.php';
    $id = $_GET['id'];
    $query = "DELETE FROM categories WHERE categoryId = $id";
    connect($query);
    header("Location:../index.php?act=category");
?>