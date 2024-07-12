<?php
require("koneksi.php");

try {
    $catID = isset($_REQUEST['rack_id']) ? $_REQUEST['rack_id'] : null;

    if ($catID != null) {
        // Query untuk mencari pelanggan
        $query = "SELECT * FROM racks WHERE rack_id = '$catID'";
        $result = mysqli_query($koneksi, $query);

        // Memeriksa apakah pelanggan ditemukan
        if ($result && mysqli_num_rows($result) > 0) {
            // Query untuk menghapus pelanggan
            $deleteQuery = "DELETE FROM racks WHERE rack_id = '$catID'";
            $deleteResult = mysqli_query($koneksi, $deleteQuery);

            if ($deleteResult) {
                // Penghapusan berhasil
                header("Location: racks.php?successDelete=racks berhasil dihapus!");
                exit();
            } else {
                // Gagal menghapus racks
                header("Location: racks.php?failedDelete=Gagal menghapus racks!");
                exit();
            }
        } else {
            // racks tidak ditemukan
            header("Location: racks.php?failedDelete=racks tidak ditemukan!");
            exit();
        }
    } else {
        // ID racks tidak valid
        header("Location: racks.php?failedDelete=ID racks tidak valid!");
        exit();
    }
} catch (\Throwable $th) {
    // Gagal menghapus racks
    header("Location: racks.php?failedDelete=Gagal menghapus pelanggan karena data pelanggan masih dibutuhkan dalam tabel pemesanan!");
    exit();
}

?>
