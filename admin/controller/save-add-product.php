<?php
    include '../../model/connect.php';
    $name = $_POST['productName'];
    $price = $_POST['productPrice'];
    $image = $_FILES['productImage']['name'];
    $desc = $_POST['productDesc'];
    $category = $_POST['categoryId'];
    $query = "INSERT INTO products (productName, productPrice, productImage, productDesc, categoryId) VALUES ('$name', '$price', '$image', '$desc', '$category')";
    connect($query);
    move_uploaded_file($_FILES["productImage"]["tmp_name"],"../../image/".$_FILES["productImage"]["name"]);
    header("Location:../index.php?act=product");
?>