<?php
    include '../../model/connect.php';
    $query_user = "SELECT * FROM users";
    $users = getAll($query_user);
    $username = $_POST['userName'];
    $password = $_POST['userPassword'];
    if (isset($_POST['submit'])) {
        $query_login = "SELECT * FROM users WHERE userName = '$username' and userPassword = '$password'";
        $_SESSION['user'] = connect($query_login);
    }
?>