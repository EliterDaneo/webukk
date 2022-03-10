<?php 
    include '../template/header.php';
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
         <form method="post" action="simpan_catatan.php">
            <div class="form-group">
               <label>Tanggal Perjalanan</label> 
               <input name="tanggal" class="form-control" type="date" placeholder="Pilih Tanggal" required>
            </div>
            <div class="form-group">
               <label>Waktu Perjalanan</label> 
               <input name="waktu" class="form-control" type="time" placeholder="Pilih Waktu" required>
            <div class="form-group"> 
               <label>Lokasi Perjalanan</label> 
               <input name="lokasi" class="form-control" type="text" placeholder="Masukkan Lokasi Perjalanan" required>
            </div>
            <div class="form-group">
               <label>Suhu Tubuh</label> 
               <input name="suhu" class="form-control" type="text" placeholder="Masukkan Suhu Tubuh" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>SIMPAN</button>
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php 
    include '../template/footer.php';
  ?>

