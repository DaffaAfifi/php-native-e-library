<?php
require("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $code = mysqli_real_escape_string($koneksi, $_POST['code']);

    // Insert query
    $query = "INSERT INTO racks (code) 
           VALUES ('$code')";

    if (mysqli_query($koneksi, $query)) {
        $successMessage = "Buku berhasil ditambahkan!";
        header("Location: racks.php?successAdd=" . urlencode($successMessage));
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>