<?php
$host     = "127.0.0.1"; // Atau "localhost"
$user     = "root";      // Username default MariaDB di Termux
$password = "";          // Kosongkan jika belum mengatur password
$database = "nama_database_kamu"; // Ganti dengan nama database di phpMyAdmin

// Membuat koneksi ke MariaDB/phpMyAdmin
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek status koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil!";
?>
