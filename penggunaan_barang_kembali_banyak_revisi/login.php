<?php
if (!isset($_SESSION['user'])) {
    header("Location: login.html?error=1");
    exit;
}

require 'koneksi.php';
$emailnim = $_POST['emailnim'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM tbl_users
                WHERE emailnim = '$emailnim' AND password = '$password'";

if (mysqli_num_rows($cek) > 0) {
    $_SESSION['user'] = $emailnim;
    header("Location: dashboard.html");
    exit();
} else {
    header("Location: login.html?error=1");
    exit();
}
?>
