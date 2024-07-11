<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from karyawan where
nama_karyawan='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
while($row = mysqli_fetch_array($data)){
    $id = $row['ID_karyawan'];
    $fullname = $row['nama_karyawan'];
}

if($cek > 0){
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $fullname;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>
