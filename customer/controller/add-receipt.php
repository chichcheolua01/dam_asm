<?php
    include '../../model/connect.php';
    $query2 = "SELECT * FROM users WHERE userId = (SELECT MAX(userId) FROM users)";
    $user = getOne($query2);
    var_dump($user);
    $id = $user["userId"];
    $query3 = "INSERT INTO receipts (userId) VALUES ('$id')";
    connect($query3);
    header("Location:../index.php?act=login");
?>