<?php 
// Sertakan koneksi database
include '../koneksi.php'; 
include '../header.php';
include '../sidebar.php';

// Sertakan header tema Stisla Anda jika ada
// include '../header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Booking - Lapangan Futsal</title>
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

<div class="main-content">
    <section class="section">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Booking</h4>
                </div>
                <div class="card-body">
                    <form action="simpan_booking.php" method="POST">
                        
                        <div class="form-group">
                            <label>Pilih Customer</label>
                            <select name="id_customer" class="form-control" required>
                                <option value="">-- Pilih Customer --</option>
                                <?php
                                $cust = mysqli_query($koneksi, "SELECT * FROM customer");
                                while($c = mysqli_fetch_array($cust)){
                                    echo "<option value='$c[id_customer]'>$c[nama_customer]</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pilih Tipe Lapangan</label>
                            <select name="id_lapangan" class="form-control" required>
                                <option value="">-- Pilih Lapangan --</option>
                                <?php
                                $lap = mysqli_query($koneksi, "SELECT * FROM tipe_lapangan");
                                while($l = mysqli_fetch_array($lap)){
                                    echo "<option value='$l[id_lapangan]'>$l[tipe_lapangan]</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Booking</label>
                            <input type="date" name="tgl_booking" class="form-control" required>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label>Jam Mulai</label>
                                <input type="time" name="jam_mulai" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Jam Selesai</label>
                                <input type="time" name="jam_selesai" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Status Pembayaran</label>
                            <select name="status_pembayaran" class="form-control" required>
                                <option value="Proses">Proses</option>
                                <option value="Lunas">Lunas</option>
                            </select>
                        </div>

                        <div class="form-group mt-4 text-right">
                            <button type="submit" class="btn btn-primary">Booking</button>
                            <a href="index.php" class="btn btn-secondary">Batal</a>
                        </div>

                    </form> </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>