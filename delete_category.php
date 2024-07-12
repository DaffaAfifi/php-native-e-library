<?php
require("koneksi.php");

try {
    $catID = isset($_REQUEST['category_id']) ? $_REQUEST['category_id'] : null;

    if ($catID != null) {
        // Query untuk mencari pelanggan
        $query = "SELECT * FROM categories WHERE category_id = '$catID'";
        $result = mysqli_query($koneksi, $query);

        // Memeriksa apakah pelanggan ditemukan
        if ($result && mysqli_num_rows($result) > 0) {
            // Query untuk menghapus pelanggan
            $deleteQuery = "DELETE FROM categories WHERE category_id = '$catID'";
            $deleteResult = mysqli_query($koneksi, $deleteQuery);

            if ($deleteResult) {
                // Penghapusan berhasil
                header("Location: categories.php?successDelete=categories berhasil dihapus!");
                exit();
            } else {
                // Gagal menghapus categories
                header("Location: categories.php?failedDelete=Gagal menghapus categories!");
                exit();
            }
        } else {
            // categories tidak ditemukan
            header("Location: categories.php?failedDelete=categories tidak ditemukan!");
            exit();
        }
    } else {
        // ID categories tidak valid
        header("Location: categories.php?failedDelete=ID categories tidak valid!");
        exit();
    }
} catch (\Throwable $th) {
    // Gagal menghapus categories
    header("Location: categories.php?failedDelete=Gagal menghapus pelanggan karena data pelanggan masih dibutuhkan dalam tabel pemesanan!");
    exit();
}

?>
