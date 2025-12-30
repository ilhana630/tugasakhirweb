<?php include '../koneksi.php';
//memanggil warna biru
include '../header.php';
include '../sidebar.php';
 ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Tipe Lapangan</h1>
    </div>
    
    <div class="card">
      <form action="simpan.php" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Tipe Lapangan</label>
            <input type="text" name="tipe_lapangan" class="form-control" placeholder="Contoh: Indoor / Outdoor" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Per Jam</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" name="harga_per_jam" class="form-control" placeholder="Contoh: 150000" required>
                          </div>
                          <small class="text-muted">Masukkan angka saja tanpa titik (Contoh: 150000)</small>
                        </div>
                      </div>
                      <div class="card-footer text-right">
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                      </div>
                    </form>
                  </div>
                </section>
              </div>