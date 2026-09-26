<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pbl109";

$koneksi = mysqli_connect($host, $user, $password, $database);

if(!$koneksi) {
    die("koneksi gagal" . mysqli_connect_error());
}
?>