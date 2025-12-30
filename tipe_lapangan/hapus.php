<?php 
include '../koneksi.php';

// Menangkap ID yang dikirim melalui URL
$id = $_GET['id'];

// Menghapus data dari tabel customer
$query = mysqli_query($koneksi, "DELETE FROM tipe_lapangan WHERE id_lapangan='$id'");

if($query){
    header("location:index.php?pesan=hapus");
} else {
    echo "Gagal menghapus: " . mysqli_error($koneksi);
}
?>