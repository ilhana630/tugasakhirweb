<?php
include '../koneksi.php';
$query = "SELECT * FROM tipe_lapangan";
$tampil = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Produk &mdash; Stisla</title>
  
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="../assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
     <?php include '../header.php' ?>

    <div class="main-sidebar sidebar-style-2">
      <?php include '../sidebar.php'; ?>
    </div>

      <!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tipe Lapangan</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Lapangan</h4>
                        <div class="card-header-action">
                            <a href="tambah.php" class="btn btn-primary">+ Tambah Lapangan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Id Lapangan</th>
                                        <th>Tipe Lapangan</th>
                                        <th>Harga Per Jam</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
    <?php
    $no = 1;
    // Mengambil data dari tabel tipe_lapangan
    $query = mysqli_query($koneksi, "SELECT * FROM tipe_lapangan");
    while($row = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td class="text-center"><?php echo $no++; ?></td>
        <td><?php echo $row['id_lapangan']; ?></td>
        <td><?php echo $row['tipe_lapangan']; ?></td>
        <td>Rp <?php echo number_format($row['harga_per_jam'], 0, ',', '.'); ?></td>
        <td class="text-center">
            <a href="edit.php?id=<?php echo $row['id_lapangan']; ?>" class="btn btn-warning">Edit</a>
            <a href="hapus.php?id=<?php echo $row['id_lapangan']; ?>" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambah">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Lapangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="simpan.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label>Tipe Lapngan</label>
            <input type="text" class="form-control" name="tipe_lapangan" required placeholder="Contoh: Lapanagn Indoor">
          </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Pesan</button>
        </div>
      </form>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="../assets/modules/jquery.min.js"></script>
  <script src="../assets/modules/popper.js"></script>
  <script src="../assets/modules/tooltip.js"></script>
  <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../assets/modules/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="../assets/modules/datatables/datatables.min.js"></script>
  <script src="../assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="../assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>