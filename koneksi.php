<?php
// Detail koneksi database
$host = "localhost"; // Host database (biasanya localhost)
$username = "root"; // Nama pengguna database
$password = "root"; // Kata sandi database
$database = "e-library"; // Nama database

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi jika ada error
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>