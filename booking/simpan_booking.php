<?php
include '../koneksi.php';

// 1. Ambil data dari form
$id_customer      = $_POST['id_customer'];
$id_lapangan      = $_POST['id_lapangan'];
$tgl_booking      = $_POST['tgl_booking'];
$jam_mulai        = $_POST['jam_mulai'];
$jam_selesai      = $_POST['jam_selesai'];
$status_pembayaran = $_POST['status_pembayaran']; // Pastikan name di form sama

// 2. Ambil harga lapangan untuk hitung total
$sql_harga = mysqli_query($koneksi, "SELECT harga_per_jam FROM tipe_lapangan WHERE id_lapangan = '$id_lapangan'");
$data_lap  = mysqli_fetch_assoc($sql_harga);
$harga     = $data_lap['harga_per_jam'];

// 3. Hitung durasi dan total bayar
$awal  = strtotime($jam_mulai);
$akhir = strtotime($jam_selesai);
$durasi = ($akhir - $awal) / 3600;
$total_bayar = $durasi * $harga;

// 4. Query Simpan
$query = "INSERT INTO booking (id_customer, id_lapangan, tgl_booking, jam_mulai, jam_selesai, total_bayar, status_pembayaran) 
          VALUES ('$id_customer', '$id_lapangan', '$tgl_booking', '$jam_mulai', '$jam_selesai', '$total_bayar', '$status_pembayaran')";

// 5. Eksekusi dan Cek Error
if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data Berhasil Disimpan'); window.location='index.php';</script>";
} else {
    // Jika gagal, ini akan memunculkan alasan rusaknya
    echo "Gagal Simpan karena: " . mysqli_error($koneksi);
}
?>