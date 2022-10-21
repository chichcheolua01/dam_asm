<?php
    session_start();
    session_destroy();
    //header("location: ../../customer/index.php?act=home");
    header("Location: ../../customer/index.php?act=login");
?>