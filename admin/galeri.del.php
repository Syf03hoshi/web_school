<?php
require_once "../koneksi.php";
// Delete image
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "SELECT fotogbr FROM foto WHERE idgambar=$id";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $filename = $row['fotogbr'];
        unlink("gambar/$filename"); // Delete file from server
        $sql = "DELETE FROM foto WHERE idgambar=$id";
        if ($link->query($sql) === TRUE) {
            echo "Image deleted successfully";
        } else {
            echo "Error deleting image: " . $conn->error;
        }
    } else {
        echo "Image not found";
    }
    header('Location:tables.galeri.php');
}

$link->close();
?>
