 <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../public/dist/css/adminlte.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="../../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 
   
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 <?php 
 include '../includes/navbar.php'; 
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php 
 include '../includes/menu.php'; 
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Producto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Producto</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
           <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mantenimiento de producto</h3>
               
              </div>

            <div class="container">
                <div class="row">
                    <button id="btnnuevo" type="button" class="btn btn-primary">Nuevo Registro</button>
                 </div>
            </div>

           

              <!-- /.card-header -->
              <div class="card-body">
                <table id="productos_data" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>

                
                  </tr>
                  </thead>
                  <tbody>
                 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include_once("../includes/footer.php");?>
</div>
<!-- ./wrapper -->

<!-- Modal -->
<?php require_once("Modalmantenimiento.php") ?>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../public/dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../../public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../public/plugins/jszip/jszip.min.js"></script>
<script src="../../public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./mntproducto.js"></script>
</body>
</html>
