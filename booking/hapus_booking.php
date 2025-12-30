<?php 

include '../koneksi.php';


$id = $_GET['id'];


$query = mysqli_query($koneksi, "DELETE FROM booking WHERE id_booking='$id'");


if($query){
    header("location:index.php?pesan=hapus_berhasil");
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>