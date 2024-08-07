<?php
require ("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $id = mysqli_real_escape_string($koneksi, $_POST['book_id']);
    $title = mysqli_real_escape_string($koneksi, $_POST['title']);
    $author = mysqli_real_escape_string($koneksi, $_POST['author']);
    $description = mysqli_real_escape_string($koneksi, $_POST['description']);
    $release_year = intval($_POST['release']);
    $category_id = intval($_POST['category']);
    $rack_code_id = mysqli_real_escape_string($koneksi, $_POST['rack']);

    // Query untuk mengupdate destinasi
    $query = "UPDATE books SET title = '$title', author = '$author', `release` = '$release_year', category_id = '$category_id', description = '$description', rack = '$rack_code_id' WHERE book_id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_query($koneksi, $query)) {
        $successMessage = "Buku berhasil diupdate!";
        header("Location: books.php?successAdd=" . urlencode($successMessage));
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Menangani akses yang tidak sah
    echo "Akses tidak sah!";
}
?>