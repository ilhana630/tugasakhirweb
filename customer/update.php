<?php 
include '../koneksi.php';

$id_customer   = $_POST['id_customer'];
$nama_customer = $_POST['nama_customer'];
$no_hp         = $_POST['no_hp'];
$email         = $_POST['email'];

$query = "UPDATE customer SET 
          nama_customer = '$nama_customer', 
          no_hp = '$no_hp', 
          email = '$email' 
          WHERE id_customer = '$id_customer'";

if(mysqli_query($koneksi, $query)){
    header("location:index.php");
} else {
    echo "Gagal update customer: " . mysqli_error($koneksi);
}
?>