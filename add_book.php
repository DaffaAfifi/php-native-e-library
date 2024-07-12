<?php
require("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = mysqli_real_escape_string($koneksi, $_POST['title']);
    $author = mysqli_real_escape_string($koneksi, $_POST['author']);
    $release_year = intval($_POST['release']);
    $category_id = intval($_POST['category']);
    $rack_code_id = intval($_POST['rack']);

    // Insert query
    $query = "INSERT INTO books (title, author, `release`, category_id, rack_id) 
           VALUES ('$title', '$author', $release_year, $category_id, $rack_code_id)";

    if (mysqli_query($koneksi, $query)) {
        $successMessage = "Buku berhasil ditambahkan!";
        header("Location: books.php?successAdd=" . urlencode($successMessage));
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>