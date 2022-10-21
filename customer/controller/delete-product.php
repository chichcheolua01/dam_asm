<?php
    include '../../model/connect.php';
    $id = $_GET['id'];
    $delete_query = "DELETE FROM receipts_info WHERE receiptInforId = $id";
    connect($delete_query);
    header("Location: ../index.php?act=cart");
?>