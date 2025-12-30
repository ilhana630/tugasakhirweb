<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tipe_lapangan WHERE id_lapangan = '$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tipe Lapangan</title>
</head>
<body>
    <h3>Edit Tipe Lapangan</h3>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_lapangan" value="<?php echo $data['id_lapangan']; ?>">
        
        <p>
            Tipe: <br>
            <input type="text" name="tipe_lapangan" value="<?php echo $data['tipe_lapangan']; ?>">
        </p>
        
        <p>
            Harga Per Jam: <br>
            <input type="number" name="harga_per_jam" value="<?php echo $data['harga_per_jam']; ?>">
        </p>
        
        <button type="submit">Update Data</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>