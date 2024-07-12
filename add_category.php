<?php
require("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);

    // Insert query
    $query = "INSERT INTO categories (name) 
           VALUES ('$name')";

    if (mysqli_query($koneksi, $query)) {
        $successMessage = "Kategori berhasil ditambahkan!";
        header("Location: categories.php?successAdd=" . urlencode($successMessage));
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>