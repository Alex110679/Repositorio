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
    
    <div class="card card-solid">
        
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Estudiante
                        </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>ALEXANDER HIGUERA</b></h2>
                                        <h4 class="lead"><b>alexander.higuera@uniminuto.edu</b></h4>
                                        <p class="text-muted text-sm"><b>About: </b> Estudiante de ingenieria de sistemas y software. </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Girardot-Cundinamarca</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: 3114661605</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="../imagenes/imagen2.png" alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>

<?php 
}else{
    header("Location:".Conectar::ruta()."views/404.php");
}
?>