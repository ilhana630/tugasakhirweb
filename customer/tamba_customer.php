<form action="simpan.php" method="POST">
    <div class="form-group">
        <label>Nama Customer</label>
        <input type="text" name="nama_customer" class="form-control" placeholder="Ketik nama lengkap..." required>
    </div>
    
    <div class="form-group">
        <label>No HP</label>
        <input type="number" name="no_hp" class="form-control" placeholder="Contoh: 0812345..." required>
    </div>
    
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Contoh: nama@gmail.com" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan Customer</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>