<?php 
include '../koneksi.php';
$id = $_GET['id'];

// Query JOIN untuk mengambil nama lapangan sekaligus
$query = "SELECT booking.*, tipe_lapangan.tipe_lapangan 
          FROM booking 
          LEFT JOIN tipe_lapangan ON booking.id_lapangan = tipe_lapangan.id_lapangan 
          WHERE id_booking='$id'";
$data = mysqli_query($koneksi, $query);
$d = mysqli_fetch_array($data);
?>

<div class="card-body">
    <form action="update_booking.php" method="POST">
        <input type="hidden" name="id_booking" value="<?php echo $d['id_booking']; ?>">

        <div class="form-group">
            <label>ID Customer (Readonly)</label>
            <input type="text" class="form-control" value="<?php echo $d['id_customer']; ?>" readonly>
            <input type="hidden" name="id_customer" value="<?php echo $d['id_customer']; ?>">
        </div>

        <div class="form-group">
            <label>Tanggal Booking</label>
            <input type="date" name="tgl_booking" class="form-control" value="<?php echo $d['tgl_booking']; ?>" required>
        </div>

        <div class="row">
            <div class="form-group col-6">
                <label>Jam Mulai</label>
                <input type="time" name="jam_mulai" class="form-control" value="<?php echo $d['jam_mulai']; ?>" required>
            </div>
            <div class="form-group col-6">
                <label>Jam Selesai</label>
                <input type="time" name="jam_selesai" class="form-control" value="<?php echo $d['jam_selesai']; ?>" required>
            </div>
        </div>

        <div class="form-group">
            <label>Tipe Lapangan</label>
            <input type="text" class="form-control" value="<?php echo $d['tipe_lapangan']; ?>" readonly>
            <input type="hidden" name="id_lapangan" value="<?php echo $d['id_lapangan']; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>