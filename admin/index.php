<?php
    include '../model/connect.php';
    session_start();
    if(!isset($_SESSION['username'])){
        if($_SESSION['userName'] == "")
        {
            header("Location: ../customer/index.php?act=login");
        }
        else 
        {
            // echo("Tên tài khoản".$_SESSION['userName']);
            if($_SESSION['userAccess'] == 0)
            {
                header("Location: ../customer/index.php?act=home");
            }
        }
    }
    else
    {
        header("Location: index.php?act=home");
    }
    $product_query = "SELECT * FROM products";
    $products = getAll($product_query);
    $category_query = "SELECT * FROM categories";
    $categories = getAll($category_query);
    $user_query = "SELECT * FROM users";
    $users = getAll($user_query);

    include './header.php';
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
        case 'edit-product':
            include "./products/edit-product.php";
            break;
        case 'category':
            include "./categories/index.php";
            break; 
        case 'edit-category':
            include "./categories/edit-category.php";
            break;   
        case 'add-category':
            include './categories/add-category.php';
            break;
        case 'list-user':
            include './users/list-user.php';
            break;
        case 'edit-user':
            include './users/edit-user.php';
            break;
        case 'list-comment':
            include './comments/list-comment.php';
            break;
        case 'list-money':
            include './sales/list-money.php';
            break;
        case 'login':
            include './login.php';
            break;
        case 'signup':
            include './signup.php';
            break;
        default:
            include './home.php';
            break;
        }
    }
    include './footer.php';
?>