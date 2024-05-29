<?php 
require_once("../config/conexion.php");
require_once("../model/experiencia.php");
$experiencia=new Experiencia();
switch($_GET["opc"]){
    
    case"mostrar":
        $datos =$experiencia->get_experienciaXid($_POST["idexperiencia"]);
        if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["exp_titulo"] = $row["exp_titulo"];
                $output["exp_lugar"] = $row["exp_lugar"];
                $output["exp_annoIni"] = $row["exp_annoIni"];
                $output["exp_annoFin"] = $row["exp_annoFin"];
                $output["exp_tipo"] = $row["exp_tipo"];
            }
            echo json_encode($output);
        }
        break;

    case"modificar":
        $experiencia->update_experiencia(
            $_POST["idexperiencia"],
            $_POST["exp_titulo"],
            $_POST["exp_lugar"],
            $_POST["exp_annoIni"],
            $_POST["exp_annoFin"],
            $_POST["exp_tipo"]
        );
        break;

    case"guardaryeditar":
        if(empty($_POST["idexperiencia"])){
            $experiencia->insert_experiencia($_POST["exp_titulo"],$_POST["exp_lugar"],$_POST["exp_annoIni"],$_POST["exp_annoFin"],$_POST["exp_tipo"]);
        }else{
            $experiencia->update_experiencia($_POST["idexperiencia"],$_POST["exp_titulo"],$_POST["exp_lugar"],$_POST["exp_annoIni"],$_POST["exp_annoFin"],$_POST["exp_tipo"]);
        }
        break;

        case"eliminar":
            $experiencia->delete_experiencia($_POST["idexperiencia"]);
            break;

    case"listar":
        $datos=$experiencia->get_experiencia();
        $data=Array();
        foreach($datos as $row){
            $sub_array=array();
            $sub_array[]=$row["exp_titulo"];
            $sub_array[]=$row["exp_lugar"];
            $sub_array[]=$row["exp_annoIni"];
            $sub_array[]=$row["exp_annoFin"];
            $sub_array[]=$row["exp_tipo"];

            $sub_array[]='<button type="button" onClick="editar('.$row["idexperiencia"].');" id="'.$row["idexperiencia"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="bx bx-edit-alt"></i></div></button>';
            $sub_array[]='<button type="button" onClick="eliminar('.$row["idexperiencia"].');" id="'.$row["idexperiencia"].'"
            class="btn btn-outline-danger btn-icon"><div><i class="bx bx-trash"></i></div></button>';
            $data[]=$sub_array;            
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