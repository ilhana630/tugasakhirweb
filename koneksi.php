<?php
// Konfigurasi Database
$host     = "localhost";
$user     = "root";
$password = "";
$database = "lapangan_futsal"; // Sesuaikan dengan nama database di phpMyAdmin kamu

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>