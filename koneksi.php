<?php
// Detail koneksi database
$host = "localhost"; // Host database (biasanya localhost)
$username = "root"; // Nama pengguna database
$password = "father573"; // Kata sandi database
$database = "agen_perjalanan"; // Nama database

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi jika ada error
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>