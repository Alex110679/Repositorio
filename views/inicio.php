<?php 
define("BASE_URL","Thiago/views/");
require_once("../config/conexion.php");
//require_once("../model/Usuario.php");
if(isset($_SESSION["idusuarios"])){
?>

<!DOCTYPE html>
<html lang="en">

<?php include("modulos/head.php");?>
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel= "stylesheet">





<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("modulos/header.php");?>
  <!-- /.n avbar -->

  <!-- Main Sidebar Container -->
  <?php include("modulos/menu.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    
    <div class="tab-content">
      
      <div class="tab-loading">
        <div>
          <h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
              <i class='bx bx-shopping-bag'></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
              <i class='bx bxs-bar-chart-alt-2'></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
              <i class='bx bx-user-plus'></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
              <i class='bx bxs-pie-chart-alt'></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div>
      </section>
    </div>
  </div>
  
  <!-- /.content-wrapper -->
  <?php include("modulos/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include("modulos/js.php");?>

</body>
</html>

<?php 
}else{
  header("Location:".Conectar::ruta()."views/404.php");
}
?>