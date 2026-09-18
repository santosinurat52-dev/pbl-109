<?php
require 'koneksi.php';
$namalengkap = $_POST['namalengkap'];
$emailnim = $_POST['emailnim'];
$password = $_POST['password'];
$ulangipassword = $_POST['ulangipassword'];

$cek = mysqli_query($conn, "SELECT * FROM tbl_users WHERE emailnim = '$emailnim'");

if (mysqli_num_rows($cek) > 0) {
    header("Location: register.html?error=emailnim");
    exit();
}

$query_sql = "INSERT INTO tbl_users (namalengkap, emailnim, password, ulangipassword)
VALUES ('$namalengkap', '$emailnim', '$password', '$ulangipassword')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: dashboard.html");
    exit;
} else {
    echo "pendaftaran gagal: " . mysqli_error($conn);
}
?>
