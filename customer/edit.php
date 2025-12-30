<?php include '../koneksi.php'; ?>
<h3>Edit Data Customer</h3>

<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer='$id'");
while($d = mysqli_fetch_array($data)){
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id_customer" value="<?php echo $d['id_customer']; ?>">
    
    <div class="form-group">
        <label>Nama Customer</label>
        <input type="text" name="nama_customer" class="form-control" value="<?php echo $d['nama_customer']; ?>" required>
    </div>
    <div class="form-group">
        <label>No HP</label>
        <input type="number" name="no_hp" class="form-control" value="<?php echo $d['no_hp']; ?>" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $d['email']; ?>" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Update Data</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php } ?>