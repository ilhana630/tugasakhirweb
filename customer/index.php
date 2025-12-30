<?php 
  include '../koneksi.php'; // Pastikan file koneksi sudah benar arahnya
  $query = mysqli_query($koneksi, "SELECT * FROM customer"); 
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
      <h1>Customer</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Daftar Customer</h4>
              <div class="card-header-action">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                  <i class="fas fa-plus"></i> Tambah Customer
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Nama Customer</th>
                      <th>No Hp</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $no = 1;
                     while($d = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td><strong><?php echo $d['nama_customer']; ?></strong></td>
                      <td><?php echo $d['no_hp']; ?></td>
                      <td><?php echo $d['email']; ?></td>
                      <td>
                        <a href="edit.php?id=<?php echo $d['id_customer']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="hapus.php?id=<?php echo $d['id_customer']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')"><i class="fas fa-trash"></i></a>
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
    </div>
  </section>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" data-backdrop="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="simpan_customer.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Customer</label>
            <input type="text" class="form-control" name="nama_customer" required placeholder="Contoh: Sanjaya">
          </div>
          <div class="form-group">
            <label>NO HP</label>
            <input type="number" class="form-control" name="no_hp" required placeholder="Cotoh: 089515478143">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" require placeholder="Contoh: sanjay@gmail.com">
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