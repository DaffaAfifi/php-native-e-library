<?php
require("koneksi.php");

try {
    $catID = isset($_REQUEST['book_id']) ? $_REQUEST['book_id'] : null;

    if ($catID != null) {
        // Query untuk mencari pelanggan
        $query = "SELECT * FROM books WHERE book_id = '$catID'";
        $result = mysqli_query($koneksi, $query);

        // Memeriksa apakah pelanggan ditemukan
        if ($result && mysqli_num_rows($result) > 0) {
            // Query untuk menghapus pelanggan
            $deleteQuery = "DELETE FROM books WHERE book_id = '$catID'";
            $deleteResult = mysqli_query($koneksi, $deleteQuery);

            if ($deleteResult) {
                // Penghapusan berhasil
                header("Location: books.php?successDelete=books berhasil dihapus!");
                exit();
            } else {
                // Gagal menghapus books
                header("Location: books.php?failedDelete=Gagal menghapus books!");
                exit();
            }
        } else {
            // books tidak ditemukan
            header("Location: books.php?failedDelete=books tidak ditemukan!");
            exit();
        }
    } else {
        // ID books tidak valid
        header("Location: books.php?failedDelete=ID books tidak valid!");
        exit();
    }
} catch (\Throwable $th) {
    // Gagal menghapus books
    header("Location: books.php?failedDelete=Gagal menghapus pelanggan karena data pelanggan masih dibutuhkan dalam tabel pemesanan!");
    exit();
}

?>
