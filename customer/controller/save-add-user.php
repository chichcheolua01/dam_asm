<?php
    include '../../model/connect.php';
    $user_query = "SELECT * FROM users";
    $users = getAll($user_query);
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userRePassword = $_POST['userRePassword'];
    $userFullname = $_POST['userFullname'];
    $userImage = $_FILES['userImage']['name'];
    $userAccess = 0;
    $count = 0;
    foreach ($users as $value) {
        if ($userPassword != $userRePassword)
        {
            $count=2;
            header("Location: ../index.php?act=signup&error=2");
        }
        elseif ($userName == $value['userName'])
        {
            $count=1;
            header("Location: ../index.php?act=signup&error=1");
        }
    }
    if($count == 0)
    {
        $query = "INSERT INTO users (userName, userPassword, userImage, userFullname, userAccess) VALUES ('$userName','$userPassword','$userImage', '$userFullname','$userAccess')";
        connect($query); 
        move_uploaded_file($_FILES["userImage"]["tmp_name"],"../../image/".$_FILES["userImage"]["name"]);
        header("Location:./add-receipt.php");
    }
    
?>