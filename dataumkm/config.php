<?php
// Konfigurasi database
$host = 'localhost'; // Ganti dengan host database Anda
$dbname = 'data_umkm'; // Ganti dengan nama database Anda
$username = 'username'; // Ganti dengan username database Anda
$password = 'password'; // Ganti dengan password database Anda

// Membuat koneksi ke database menggunakan mysqli
$conn = mysqli_connect($host, $username, $password, $dbname);
// Memeriksa apakah koneksi berhasil
if (!$conn) {
    die("Failed to connect to the database: " . mysqli_connect_error());
}
