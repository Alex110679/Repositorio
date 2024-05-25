<?php 
require_once("../config/conexion.php");
require_once("../model/informacion_personal.php");
$informacion_personal=new Informacion_personal();
switch($_GET["opc"]){
    
    case"mostrar":
        $datos =$informacion_personal->get_informacion_personalXid($_POST["idinformacion_personal"]);
        if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["info_nacimiento"] = $row["info_nacimiento"];
                $output["info_celular"] = $row["info_celular"];
                $output["info_email"] = $row["info_email"];
                $output["info_url"] = $row["info_url"];
                $output["info_direccion"] = $row["info_direccion"];
                $output["info_cargo"] = $row["info_cargo"];
            }
            echo json_encode($output);
        }
        break;

    case"modificar":
        $informacion_personal->update_informacion_personal(
            $_POST["idinformacion_personal"],
            $_POST["info_nacimiento"],
            $_POST["info_celular"],
            $_POST["info_email"],
            $_POST["info_url"],
            $_POST["info_direccion"],
            $_POST["info_cargo"]
        );
        break;

    case"guardaryeditar":
        if(empty($_POST["idinformacion_personal"])){
            $informacion_personal->insert_informacion_personal($_POST["info_nacimiento"],$_POST["info_celular"],$_POST["info_email"],$_POST["info_url"],$_POST["info_direccion"],$_POST["info_cargo"]);
        }else{
            $informacion_personal->update_informacion_personal($_POST["idinformacion_personal"],$_POST["info_nacimiento"],$_POST["info_celular"],$_POST["info_email"],$_POST["info_url"],$_POST["info_direccion"],$_POST["info_cargo"]);
        }
        break;

    case"eliminar":
        $informacion_personal->delete_informacion_personal($_POST["idinformacion_personal"]);
        break;

    case"listar":
        $datos=$informacion_personal->get_informacion_personal();
        $data=Array();
        foreach($datos as $row){
            $sub_array=array();
            $sub_array[]=$row["info_nacimiento"];
            $sub_array[]=$row["info_celular"];
            $sub_array[]=$row["info_email"];
            $sub_array[]=$row["info_url"];
            $sub_array[]=$row["info_direccion"];
            $sub_array[]=$row["info_cargo"];
            

            $sub_array[]='<button type="button" onClick="editar('.$row["idinformacion_personal"].');" id="'.$row["idinformacion_personal"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[]='<button type="button" onClick="eliminar('.$row["idinformacion_personal"].');" id="'.$row["idinformacion_personal"].'"
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