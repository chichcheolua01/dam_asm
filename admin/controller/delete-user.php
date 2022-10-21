<?php
    include '../../model/connect.php';
    $id = $_GET['id'];
    $query2 = "DELETE FROM receipts WHERE userId = '$id'";
    connect($query2);
    $query = "DELETE FROM users WHERE userId = $id";
    connect($query);
    header("Location:../index.php?act=list-user");
?>