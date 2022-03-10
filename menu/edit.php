<?php
  include '../template/header.php';
	include '../koneksi/koneksi.php';
	$id_catatan = $_GET['id_catatan'];
	$data = mysqli_query($koneksi,"select * from catatan where id_catatan='$id_catatan'");
	while($d = mysqli_fetch_array($data)){
?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengisian Data Formulir Pendaftaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="card-header">
            <a href="user.php" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
            </div>                          
        </div>
        <div class="card-body">
         <form method="POST" action="edit_catatan.php">
           <div class="form-group">
               <label>ID Users</label> 
               <input name="id_catatan" class="form-control" type="text" value="<?php echo $d['id_catatan']; ?>" hidden>
            </div>
           <div class="form-group">
               <label>NIK Users</label> 
               <input name="nik" class="form-control" type="text" value="<?php echo $d['nik']; ?>" readonly>
            </div>
            <div class="form-group">
               <label>Tanggal Perjalanan</label> 
               <input name="tanggal" class="form-control" type="date" value="<?php echo $d['tanggal']; ?>" required>
            </div>
            <div class="form-group">
               <label>Waktu Perjalanan</label> 
               <input name="waktu" class="form-control" type="time" value="<?php echo $d['waktu']; ?>" required>
            </div>
            <div class="form-group"> 
               <label>Lokasi Perjalanan</label> 
               <input name="lokasi" class="form-control" type="text" value="<?php echo $d['lokasi']; ?>" required>
            </div>
            <div class="form-group">
               <label>Suhu Tubuh</label> 
               <input name="suhu" class="form-control" type="text" value="<?php echo $d['suhu']; ?>" required>
            </div>
            <div class="form-group">
                <button type="submit" value="simpan" class="btn btn-primary"><i class="fa fa-save"></i>SIMPAN</button>
                <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i>KOSONGKAN</button>
            </div>
        </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Form Pengisian
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?php 
	}
	?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php 
    include '../template/footer.php';
  ?>