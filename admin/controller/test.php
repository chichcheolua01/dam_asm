<?php
    session_start();
    if(!isset($_SESSION['username'])){
        if($_SESSION['userName'] == "")
        {
            header("Location: ../../customer/index.php?act=login");
        }
        else 
        {
            // echo("Tên tài khoản".$_SESSION['userName']);
            if($_SESSION['userAccess'] == 0)
            {
                header("Location: ../../customer/index.php?act=home");
            }
            else
            {
                echo("Tên tài khoản".$_SESSION['userName']);
            }
        }
    }
    else
    {
        header("Location: ../index.php?act=home");
    }


?>