<?php

define('TITLE', 'Login');

$loggedin = false;
$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        if ( (strtolower($_POST['username']) == 'admin') && ($_POST['password'] == 'ct275') ) {
            session_start();
            $_SESSION['user'] = "admin";
            $loggedin = true;
        } else {
            $error = 'Địa chỉ username và mật khẩu không khớp!';
        }

    } else {
        $error = 'Hãy đảm bảo rằng bạn cung cấp đầy đủ địa chỉ username và mật khẩu!';
    }

}

if ($error) {
    echo '<p class="error">' . $error . '</p>';
}

if ($loggedin) {
    include '../model/library.php';
    redirect('../view/admin/admin.php');
    echo '<p>Bạn đã đăng nhập!</p>';
} else {
    include './layouts/form-login.php';
}