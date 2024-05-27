<?php require_once("config/conexion.php");?>
<?php
    require_once("models/informacion_personal.php");
    $usuario = new informacion_personal();
    $usu = $usuario->get_informacion_personal();

    require_once("models/Social_Media.php");
    $social = new SocialMedia();
    $soc = $social->get_socialMedia();
?>


<?php 
    for($i=0;$i<sizeof($soc);$i++)
?>

<a href="<?php echo $soc[$i]["socmed_url"] ?>"><i class='bx bxl-<?php echo $soc[$i]["socmed_icono"]?>'></i></a>

<?php
    'endfor';
?>



