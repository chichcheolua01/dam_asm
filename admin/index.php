<?php
    include '../model/connect.php';
    $product_query = "SELECT * FROM products";
    $products = getAll($product_query);
    $category_query = "SELECT * FROM categories";
    $categories = getAll($category_query);
include "./model/connect.php";
$query = "select * from users";
$users = getAll($query);
session_start(); //bắt đầu session
$login_alert = "";
foreach ($users as $value) {
    if (isset($_POST['submit'])) {
        $userName = $_POST['userName'];
        $userPassword = $_POST['userPassword'];
        if ($userName == $value['userName'] && $userPassword == $value['userPassword']) {
            $_SESSION['userName'] = $userName;
            header('Location: index.php');
        } else {
            $login_alert = "Incorrect username or password";
        }
    }
}
if (isset($_SESSION["userName"])) {
    $username = $_SESSION['userName'];
    $query2 = "SELECT * FROM users WHERE userName like '$username'";
    $login_user = getOne($query2);
    $location = "admin.php";
} else {
    $login_user["userAvatar"] = "sample.png";
    $location = "index.php";
}

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
        case 'list-customer':
            include './customers/list-customer.php';
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
        default:
            include './home.php';
            break;
        }
    }
    include './footer.php';
?>