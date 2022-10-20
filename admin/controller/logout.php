<?php
    session_start();
    echo($_SESSION['userName']);die;
    session_destroy();
    header("location: ../../customer/index.php?act=home");
?>