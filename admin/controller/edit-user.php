<?php
    include "../../model/connect.php";
    $id = $_GET["id"];
    $name = $_POST["userName"];
    $password = $_POST["userPassword"];
    $image = $_FILES["userImage"]["name"];
    $fullname = $_POST["userFullname"];
    $access = $_POST["userAccess"];
    if($_FILES["userImage"]["name"] != "")
    {
        $query = "UPDATE users SET userName = '$name', userPassword = '$password', userImage = '$image', userFullname = '$fullname', userAccess = '$access' WHERE userId ='$id'";
    }  
    else
    {
        $query = "UPDATE users SET userName = '$name', userPassword = '$password', userFullname = '$fullname', userAccess = '$access' WHERE userId ='$id'";
    }  
    connect($query);
    move_uploaded_file($_FILES["userImage"]["tmp_name"], "../image/".$_FILES["userImage"]["name"]);
    header("Location: ../index.php?act=list-user");
?>
