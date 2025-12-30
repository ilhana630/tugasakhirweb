<?php 
// Hubungkan ke database
include '../koneksi.php';

// Tangkap data dari form tambah.php customer
$nama  = $_POST['nama_customer'];
$hp    = $_POST['no_hp'];
$email = $_POST['email'];

// Query INSERT sesuai kolom: id_customer, nama_customer, no_hp, email
// id_customer diisi NULL karena Auto Increment
$query = mysqli_query($koneksi, "INSERT INTO customer VALUES(NULL, '$nama', '$hp', '$email')");

if($query){
    header("location:index.php?pesan=berhasil");
} else {
    echo "Gagal menyimpan data customer: " . mysqli_error($koneksi);
}
?>