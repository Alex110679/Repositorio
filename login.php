<?php 
  require_once("config/conexion.php");

  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("model/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>
  <?php include("views/modulos/head.php");?>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
      
      <?php 
      
      if(isset($_GET["m"])){
        switch($_GET["m"]){
          case "1":
          ?>
          <div class="alert alert-danger" role="alert">
            Los datos ingresados son incorrectos!
          </div>
          <?php
          break;
          case "2":
          ?>
          <div class="alert alert-warning" role="alert">
            El formulario tiene los campos vacios!
          </div>
          <?php
          break;

          ?>
      <?php 
          
        }
      }
      ?>
      
      <div class="input-group mb-3">
          <input type="email" name="usu_correo" id="usu_correo" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="usu_pass" id="usu_pass"class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="hidden" name="enviar" class="form-control" value="si">
            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>  
      <!-- /.verifica pendiente -->

      