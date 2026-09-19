<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "penggunaanbarangkembali";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die ("koneksi Gagal : " . mysqli_connect_error());
} else {
    echo "Beehasil";
}
?>