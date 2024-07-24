<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id = $_POST['book_id'];
    $targetDir = "uploads/"; // Pastikan folder ini sudah ada dan memiliki izin tulis
    $fileName = basename($_FILES["fileUpload"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowedTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowedTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFilePath)) {
            // Insert file name into database
            // Assuming you have a database connection in db.php
            include 'koneksi.php';
            $insert = $koneksi->query("UPDATE books SET file_name = '$fileName', file_path = '$targetFilePath' WHERE book_id = '$book_id'");
            if ($insert) {
                $successMessage = "The file " . htmlspecialchars($fileName) . " has been uploaded successfully.";
                header("Location: books.php?successAdd=" . urlencode($successMessage));
            } else {
                $failedMessage = "File upload failed, please try again.";
            }
        } else {
            $failedMessage = "Sorry, there was an error uploading your file.";
        }
    } else {
        $failedMessage = "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
    }
}
?>