<?php
    include '../model/connect.php';
    $product_query = "SELECT * FROM products";
    $products = getAll($product_query);
    $category_query = "SELECT * FROM categories";
    $categories = getAll($category_query);
    include './header.php';
    //controllers

    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
        switch($act)
        {
        case 'product':
            include "./products/index.php";
            break;
        case 'add-product':
            include "./products/add-product.php";
            break;
        case 'add-category':
            include './categories/add-category.php';
            break;
        case 'list-customer':
            include './customers/list-customer.php';
            break;
        case 'list-comment':
            include './comments/list-comment.php';
            break;
        case 'list-money':
            include './sales/list-money.php';
            break;
        default:
            include './home.php';
            break;
        }
    }
    include './footer.php';
    
?>