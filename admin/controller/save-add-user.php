<?php
    include '../../model/connect.php';
    $user_query = "SELECT * FROM users";
    $users = connect($user_query);
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userRePassword = $_POST['userRePassword'];
    $userFullname = $_POST['userFullname'];
    $userImage = $_FILES['userImage']['name'];
    foreach ($users as $value) {
        if ($userPassword != $userRePassword)
        {
            header("Location: ../index.php?act=signup&error=2");
        }
        elseif ($userName == $value['userName'])
        {
            header("Location: ../index.php?act=signup&error=1");
        }
        else
        {
            $query = "INSERT INTO users (userName, userPassword, userImage, userFullname, userActive) VALUES ('$userName','$userPassword','$userImage', '$userFullname','$userActive')";
            connect($query);
            move_uploaded_file($_FILES["userImage"]["tmp_name"],"../image/".$_FILES["userImage"]["name"]);
            header("Location:../index.php?act=list-user");
        }
    }
?>