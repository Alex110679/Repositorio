<!DOCTYPE html>
<html lang="en">

<?php include("views/modulos/head.php");?>





<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("views/modulos/header.php");?>
  <!-- /.n avbar -->

  <!-- Main Sidebar Container -->
  <?php include("views/modulos/menu.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    
    <div class="tab-content">
      
      <div class="tab-loading">
        <div>
          <h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
        </div>
      </div>

      <div class="buy_content">
            <div class="box">
                <img src="imagenes/1.jpg" alt="">
                <h6>Categoria</h6>
                <h4>Algo</h4>
            </div>
            <div class="box">
                <img src="imagenes/1.jpg" alt="">
                <h6>Categoria</h6>
                <h4>Algo</h4>
            </div>
            <div class="box">
                <img src="imagenes/1.jpg" alt="">
                <h6>Categoria</h6>
                <h4>Algo</h4>
            </div>
        </div>





    </div>
  </div>
  
  <!-- /.content-wrapper -->
  <?php include("views/modulos/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include("views/modulos/js.php");?>

</body>
</html>
