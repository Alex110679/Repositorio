<?php
    class Usuario extends Conectar{
        public function login(){
            $conectar = parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $password = $_POST["usu_pass"];
                if(empty($correo) and empty($password)){
                    header("Location:".Conectar::ruta()."login.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE usu_correo=? and usu_pass=? and est=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt -> bindValue(1,$correo);
                    $stmt -> bindValue(2,$password);
                    $stmt ->execute();
                    $resultado = $stmt->fetch();

                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["idusuarios"]=$resultado["idusuarios"];
                        $_SESSION["usu_nom"]=$resultado["usu_nom"];
                        $_SESSION["usu_apep"]=$resultado["usu_apep"];
                        $_SESSION["usu_correo"]=$resultado["usu_correo"];
                        header("Location:".Conectar::ruta()."views/inicio.php");
                        exit();
                    }else{
                        header("Location:".Conectar::ruta()."login.php?m=1");
                        exit();
                    }
                        
                    

                }
            }
        }
    }

?>
