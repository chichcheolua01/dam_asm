<?php
    include '../../model/connect.php';
    $id = $_GET['id'];
    $name = $_POST['productName'];
    $price = $_POST['productPrice'];
    $image = $_FILES['productImage']['name'];
    $desc = $_POST['productDesc'];
    $category = $_POST['categoryId'];
    if($_FILES['productImage']['size'] == '0')
    {
        $query = "UPDATE products SET productName = '$name', productPrice = '$price', productDesc = '$desc', categoryId = '$category' WHERE productId = '$id'";
    }  
    else
    {
        $query = "UPDATE products SET productName = '$name', productPrice = '$price', productImage = '$image', $productDesc = '$desc', category = '$categoryId' WHERE productId = '$id' ";
    }

    connect($query);
    move_uploaded_file($_FILES['productImage']['tmp_name'], "../image/".$_FILES["productImage"]["name"]);
    header("Location: ../index.php?act=product");
?>