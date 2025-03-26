<?php
$host = "localhost";
$user = "root"; // Ubah sesuai konfigurasi MySQL Anda
$pass = "";
$db   = "db_bioskop";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
