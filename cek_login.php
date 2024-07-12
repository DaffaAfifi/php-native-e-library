<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan email dan password yang sesuai
$data = mysqli_query($koneksi,"select * from users where
email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
while($row = mysqli_fetch_array($data)){
    $id = $row['user_id'];
    $name = $row['name'];
}

if($cek > 0){
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";
    header("location:dashboard.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>
