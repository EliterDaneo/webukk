<?php
session_start();
if(empty($_SESSION['nik'])){ ?> 
 <script>
     alert('!! Maaf Anda Harus Login Dulu')
     window.location.assign('../index.php');
     </script>
<?php }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="user.php" class="brand-link">
      <li class="fas fa-book-medical" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"></li>
      <span class="brand-text font-weight-light">Peduli DIRI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <br>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tulis_catatan.php" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Catatan Perjalanan
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="rekab_catatan.php" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Rekab Catatan
              </p>
            </a>
          </li>
          <li class="nav-header">Logout Menu</li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#logOutModal">
                <i class="nav-icon fa-fw fas fa-sign-out-alt"></i>
                  <p>
                    Keluar
                  </p>
              </a>
            </li>
        </li>
        </ul>
      </nav>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Backup Catatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Catatan</li>
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
         <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Riwayat Perjalanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Suhu</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1; 
                    include '../koneksi/koneksi.php';
                    $sql = "SELECT * FROM catatan WHERE nik='$_SESSION[nik]'";
                    $query = mysqli_query($koneksi, $sql);
                    foreach($query as $value){
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['tanggal'] ?></td>
                        <td><?= $value['waktu'] ?></td>
                        <td><?= $value['lokasi'] ?></td>
                        <td><?= $value['suhu'] ?></td>
                        
					<td>
                    <a href="edit.php?id_catatan=<?php echo $value['id_catatan']; ?>"><i class="fas fa-pen"></i></a>
					<a data-toggle="modal" data-target="#hapus">|<i class="fa fa-trash"></i></a>
                    </td>
				
                        
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

 <!-- Logout edit-->
 <div class="modal fade" id="edit">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header card-outline">
                 <h5 class="modal-title">Apakah ingin menghapus data ini?</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <p>Select "Deleter" below if you are ready to end your current session.</p>
             </div>
             <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                         class="fas fa-times"></i>&ensp;Close</button>
                 <a class="btn btn-sm btn-danger" href="hapus.php?id_catatan=<?php echo $value['id_catatan']; ?>"><i
                         class="fas fa-trash"></i>&ensp;Logout</a>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>


 <!-- Logout Hapus-->
 <div class="modal fade" id="hapus">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header card-outline">
                 <h5 class="modal-title">Apakah ingin menghapus data ini?</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <p>Select "Deleter" below if you are ready to end your current session.</p>
             </div>
             <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                         class="fas fa-times"></i>&ensp;Close</button>
                 <a class="btn btn-sm btn-danger" href="hapus.php?id_catatan=<?php echo $value['id_catatan']; ?>"><i
                         class="fas fa-trash"></i>&ensp;Logout</a>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>

 <!-- Logout Modal-->
 <div class="modal fade" id="logOutModal">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header card-outline">
                 <h5 class="modal-title">Ready to Leave?</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <p>Select "Logout" below if you are ready to end your current session.</p>
             </div>
             <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i
                         class="fas fa-times"></i>&ensp;Close</button>
                 <a class="btn btn-sm btn-danger" href="logout.php"><i
                         class="fas fa-sign-out-alt"></i>&ensp;Logout</a>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../assets/plugins/raphael/raphael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard2.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
