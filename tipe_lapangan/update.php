<?php
// 1. Keluar dari folder tipe_lapangan untuk menemukan koneksi.php
include '../koneksi.php'; 

// 2. Ambil data dari form (Pastikan name di form HTML adalah 'id_lapangan' dan 'harga_per_jam')
$id_lapangan   = $_POST['id_lapangan'];
$harga_per_jam = $_POST['harga_per_jam'];

// 3. Pastikan variabel koneksi menggunakan $koneksi sesuai file koneksi.php Anda
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 4. Jalankan Query Update
$query = "UPDATE tipe_lapangan SET harga_per_jam = '$harga_per_jam' WHERE id_lapangan = '$id_lapangan'";
$update = mysqli_query($koneksi, $query);

// 5. Cek hasil dan arahkan kembali
if ($update) {
    echo "<script>alert('Data Berhasil Diupdate'); window.location='index.php';</script>";
} else {
    echo "Gagal update: " . mysqli_error($koneksi);
}
?>