<?php
include '../koneksi.php';
// Query sakti untuk menghubungkan 3 tabel
$query = "SELECT booking.*, customer.nama_customer, tipe_lapangan.harga_per_jam 
          FROM booking 
          LEFT JOIN customer ON booking.id_customer = customer.id_customer
          LEFT JOIN tipe_lapangan ON booking.id_lapangan = tipe_lapangan.id_lapangan";

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
<!-- Start GA -->
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
            <h1>Booking Lapangan</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Data Booking Lapangan</h4>
                <div class="card-header-action">
                  <a href="tambah_booking.php" class="btn btn-primary">Tambah Booking</a>
                 </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Booking</th>
                                <th>Nama Customer</th>
                                <th>Tgl Booking</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th>Tipe Lapangan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            include '../koneksi.php';
                            $no = 1;
                            
                            // Query tunggal yang lengkap dengan LEFT JOIN
                            $sql = "SELECT booking.*, customer.nama_customer, tipe_lapangan.harga_per_jam 
                                    FROM booking
                                    LEFT JOIN customer ON booking.id_customer = customer.id_customer
                                    LEFT JOIN tipe_lapangan ON booking.id_lapangan = tipe_lapangan.id_lapangan 
                                    ORDER BY id_booking DESC";
                            
                            $query = mysqli_query($koneksi, $sql);

                            // Cek jika ada error pada query
                            if (!$query) {
                                die("Query Error: " . mysqli_error($koneksi));
                            }

                            // Loop data
                            while($row = mysqli_fetch_array($query)){ 
                              // HITUNG DURASI & TOTAL (Tambahkan ini di bawah while)
                               $awal  = strtotime($row['jam_mulai']);
                               $akhir = strtotime($row['jam_selesai']);
                                $durasi = ($akhir - $awal) / 3600; // Selisih dalam jam
                                 $total_bayar = $durasi * $row['harga_per_jam']; 
                                 ?>
                            <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td><?php echo $row['id_booking']; ?></td>
                                <td><?php echo $row['nama_customer'] ?? '<i class="text-muted">Tidak ditemukan</i>'; ?></td>
                                <td><?php echo $row['tgl_booking']; ?></td>
                                <td><?php echo $row['jam_mulai']; ?></td>
                                <td><?php echo $row['jam_selesai']; ?></td>
                                <td>Rp <?php echo number_format($row['total_bayar'], 0, ',', '.'); ?></td>
                                <td>
                                    <?php 
                                    // Sesuaikan nama kolom 'status_pembayaran' dengan database Anda
                                    if($row['status_pembayaran'] == 'Lunas'){
                                        echo '<div class="badge badge-success">Lunas</div>';
                                    } else {
                                        echo '<div class="badge badge-warning">Proses</div>';
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row['tipe_lapangan'] ?? '<i class="text-muted">-</i>'; ?></td>
                                <td class="text-center">
                                    <a href="edit_booking.php?id=<?php echo $row['id_booking']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="hapus_booking.php?id=<?php echo $row['id_booking']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
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