<?php
session_start();
    include '../../model/connect.php';
    $receipt_query = "SELECT * FROM receipts";
    $receipts = getAll($receipt_query);
    $username = $_SESSION['userName'];
    $user_query = "SELECT * FROM users WHERE userName = '$username'";
    $user = getOne($user_query);
    $id = $user['userId']; var_dump($id);
    $receipt_info_query = "SELECT * FROM receipts WHERE userId = '$id'";
    $new_receipt = getOne($receipt_info_query);
    $new_receiptId = $new_receipt['receiptId'];
    $productId = $_GET['id'];
    $quantity = 1;
    if(!isset($_SESSION['myCart'])){
        $_SESSION['myCart'] = [];
    }
    $id = $_GET['id'];
    if(!isset($_SESSION['userName'])){
        header("Location: ../index.php?act=product_info&id=$id&error=1");
    }
    else
    {
        $count = 0;
        foreach($receipts as $value)
        {
            if($value['userId'] == $id)
            {
                $count = 1;
            }
            
        }
        if($count == 0)
        {
            $query = "INSERT INTO receipts (userId) VALUES ('$id')";
            connect($query);
        }
        $query2 = "INSERT INTO receipts_info (receiptId, productId, quantity) VALUES('$new_receiptId', '$productId', '$quantity')";
        connect($query2);
        header("Location: ../index.php?act=cart");
    }
?>