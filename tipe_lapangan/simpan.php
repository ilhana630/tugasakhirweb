<?php 
include '../koneksi.php';

// Menangkap data dari form
$tipe_lapangan = $_POST['tipe_lapangan'];
$harga_per_jam = $_POST['harga_per_jam']; // Menangkap harga_per_jam

// Query Insert ke tabel tipe_lapangan
$query = "INSERT INTO tipe_lapangan (tipe_lapangan, harga_per_jam) VALUES ('$tipe_lapangan', '$harga_per_jam')";

if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, kembali ke index.php
    header("location:index.php?pesan=sukses");
} else {
    // Jika gagal, tampilkan error
    echo "Gagal menyimpan: " . mysqli_error($koneksi);
}
?>