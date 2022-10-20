<?php
    include '../../model/connect.php';
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE userId = $id";
    connect($query);
    header("Location:../index.php?act=list-user");
?>