<?php
require("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $catID = $_POST['rack_id'];
    $catName = $_POST['name'];

    // Query untuk mengupdate destinasi
    $query = "UPDATE racks SET code = '$catName' WHERE rack_id = '$catID'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_query($koneksi, $query)) {
        $successMessage = "Rack berhasil diupdate!";
        header("Location: racks.php?successAdd=" . urlencode($successMessage));
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Menangani akses yang tidak sah
    echo "Akses tidak sah!";
}
?>
