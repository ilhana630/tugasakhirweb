<?php 
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_booking    = $_POST['id_booking'];
    $id_customer   = $_POST['id_customer'];
    $id_lapangan   = $_POST['id_lapangan'];
    $tgl_booking   = $_POST['tgl_booking'];
    $jam_mulai     = $_POST['jam_mulai'];
    $jam_selesai   = $_POST['jam_selesai'];

    // 1. Ambil harga per jam dari database
    $query_harga = mysqli_query($koneksi, "SELECT harga_per_jam FROM tipe_lapangan WHERE id_lapangan = '$id_lapangan'");
    $data_harga  = mysqli_fetch_array($query_harga);
    $harga       = isset($data_harga['harga_per_jam']) ? $data_harga['harga_per_jam'] : 0;

    // 2. Hitung Durasi jam
    $awal  = strtotime($jam_mulai);
    $akhir = strtotime($jam_selesai);
    $durasi = ($akhir - $awal) / 3600;

    // 3. Hitung Total Bayar
    $total_bayar = $durasi * $harga;

    // 4. Update ke Database (id_lapangan tidak akan jadi 0 lagi)
    $sql = "UPDATE booking SET 
            id_customer   = '$id_customer',
            id_lapangan   = '$id_lapangan',
            tgl_booking   = '$tgl_booking',
            jam_mulai     = '$jam_mulai',
            jam_selesai   = '$jam_selesai',
            total_bayar   = '$total_bayar'
            WHERE id_booking = '$id_booking'";

    mysqli_query($koneksi, $sql);
    header("location:index.php?pesan=update");
}
?>