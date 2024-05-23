<?php 
require_once("../config/conexion.php");
require_once("../model/Usuario.php");
$usuario=new Usuario();
switch($_GET["op"]){
    
    case"mostrar":
        /*$datos =$usuario->get_usuario($_POST["idusuarios"]);
        if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["usu_nom"] = $row["usu_nom"];
                $output["usu_apep"] = $row["usu_apep"];
                $output["usu_correo"] = $row["usu_correo"];
            }
            echo json_encode($output);
        }*/
        break;

    case"modificar":
        /*$usuario->update_usuario(
            $_POST["idusuarios"],
            $_POST["usu_nom"],
            $_POST["usu_apep"],
            $_POST["usu_correo"],
        );*/
        break;

    case"guardaryeditar":
        /*if(empty($_POST["idusuarios"])){
            $usuario->insert_usuarios($_POST["usu_nom"],$_POST["usu_apep"],$_POST["usu_correo"]);
        }else{
            $usuario->update_usuario($_POST["idusuarios"],$_POST["usu_nom"],$_POST["usu_apep"],$_POST["usu_correo"]);
        }*/
        break;

    case"eliminar":
        /*$usuario->delete_usuario($_POST["idusuarios"]);
        break;*/

    case"listar":
        /*$datos=$usuario->get_usuario();*/
        $data=Array();
        foreach($datos as $row){
            $sub_array=array();
            $sub_array[]=$row["usu_nom"];
            $sub_array[]=$row["usu_apep"];
            $sub_array[]=$row["usu_correo"];

            $sub_array[]='<button type="button" onClick="editar('.$row["idusuarios"].');" id="'.$row["idusuarios"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[]='<button type="button" onClick="eliminar('.$row["idusuarios"].');" id="'.$row["idusuarios"].'"
            class="btn btn-outline-danger btn-icon"><div><i class="fa fa-close"></i></div></button>';
            $dat[]=$sub_array;            
        }
        $results=array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
        echo json_encode($results);
        

        break;
}
?>