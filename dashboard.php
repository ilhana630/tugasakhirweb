<?php 
session_start();
if($_SESSION['status'] != "login"){
    header("location:index.php?pesan=belum_login");
    exit();
}
include 'header.php';
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Booking Lapangan Futsal &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
      <?php include 'header.php' ?>

    <div class="main-sidebar sidebar-style-2">
      <?php include 'sidebar.php'; ?>
    </div>

      <!-- Main Content -->
      <div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard Admin</h1>
    </div>
    <div class="section-body">
      <div class="card-body">
    <div class="row align-items-center"> <div class="col-md-7">
            <h1 class="display-4 text-primary">Sistem Booking Lapangan Futsal</h1>
            <p class="lead">Halo <b><?php echo $_SESSION['username']; ?></b>, Selamat Mengelola Sistem. Tetap Semangat Untuk UAS Hari Ini</p>
            <hr class="my-4">
            <p>Gunakan menu di samping untuk melihat jadwal booking atau mengelola data lapangan.</p>
        </div>

        <div class="col-md-5 text-center">
            <?php
            // Pastikan nama file sesuai dengan yang ada di folder assets/img/
            $daftar_gambar = ['rumput-sintetis.png', 'vinyl.jpg', 'interlock.jpg'];
            $gambar_acak = $daftar_gambar[array_rand($daftar_gambar)];
            ?>
            
            <img src="assets/img/<?php echo $gambar_acak; ?>" 
                 alt="Lapangan HD" 
                 class="img-fluid rounded shadow-lg" 
                 style="height: 300px; width: 100%; object-fit: cover; border-radius: 15px;">
            
            <small class="text-muted d-block mt-2">Pratinjau: <?php echo $gambar_acak; ?></small>
        </div>
      </div> 
    </div>
  </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="https://nauval.in/">Ilhan Al Farizy</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/jquery.sparkline.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>