<?php
    include '../../model/connect.php';
    $name = $_POST['categoryName'];
    $query = "INSERT INTO categories (categoryName) VALUES ('$name')";
    connect($query);
    header("Location:../index.php?act=category");
?>