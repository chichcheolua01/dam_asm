<?php
    include '../../model/connect.php';
    $id = $_GET['id'];
    $name = $_POST['categoryName'];
    $query = "UPDATE categories SET categoryName = '$name' WHERE categoryId = '$id'";
    connect($query);
    header("Location: ../index.php?act=category");
?>