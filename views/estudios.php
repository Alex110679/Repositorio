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

    <div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Estudios</h1>
            </div>
        
        </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                <h3 class="card-title">Estudios</h3>
                </div>
                <div class="card-body">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-default">Crear
                </button>
                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modal-primary">Cargar</button>
                <div class="col-md-6">


                    <div class="card-body p-0">
                    <table class="table" id="estudios_data">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Lugar</th>
                            <th>Año</th>
                            <th>Tipo</th>
                        </tr>
                        </thead>
                    </table>
                    </div> 
                </div> 
                </div>            
            </div>
            </div>
        </div>
        </div>
    </section>
    
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
<?php require_once("Modalestudios.php");?>
<?php include("modulos/js.php");?>
<script type="text/javascript" src="js/estudios.js"></script>
</body>
</html>

<?php 
}else{
    header("Location:".Conectar::ruta()."views/404.php");
}
?>