<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_universitas"; // Change to db_universitas
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$koneksi) {
    die("connection failed: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}
?>
