<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aplikasi Futsal</title>
  <link rel="stylesheet" href="/tugasakhirweb/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/tugasakhirweb/assets/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="/tugasakhirweb/assets/css/style.css">
  <link rel="stylesheet" href="/tugasakhirweb/assets/css/components.css">
</head>
<body>
  <div id="app">
    <div class="main-wrapper">
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
    <div class="search-element">
      <input class="form-control" type="search" placeholder="Cari Data..." aria-label="Search" data-width="250">
      <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      <div class="search-backdrop"></div>
      
      <div class="search-result">
        <div class="search-header">Navigasi Cepat</div>
        <div class="search-item">
          <a href="/tugasakhirweb/tipe_lapangan/index.php">
            <div class="search-icon bg-danger text-white mr-3"><i class="fas fa-list"></i></div>
            Data Tipe Lapangan
          </a>
        </div>
        <div class="search-item">
          <a href="/tugasakhirweb/customer/index.php">
            <div class="search-icon bg-primary text-white mr-3"><i class="fas fa-user"></i></div>
            Data Customer
          </a>
        </div>
        <div class="search-item">
          <a href="/tugasakhirweb/booking/index.php">
            <div class="search-icon bg-success text-white mr-3"><i class="fas fa-calendar-check"></i></div>
            Data Booking
          </a>
        </div>
      </div>
    </div>
  </form>

  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="/tugasakhirweb/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, Ilhan Al Farizy</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in 5 min ago</div>
        <a href="/tugasakhirweb/profile.php" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="/tugasakhirweb/logout.php" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>