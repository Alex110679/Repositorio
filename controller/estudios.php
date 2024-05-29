<?php 
require_once("../config/conexion.php");
require_once("../model/estudios.php");
$estudios=new Estudios();
switch($_GET["opc"]){
    
    case"mostrar":
        $datos =$estudios->get_estudiosXid($_POST["idestudios"]);
        if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["est_titulo"] = $row["est_titulo"];
                $output["est_lugar"] = $row["est_lugar"];
                $output["est_anno"] = $row["est_anno"];
                $output["est_tipo"] = $row["est_tipo"];
            }
            echo json_encode($output);
        }
        break;

    case"modificar":
        $estudios->update_estudios(
            $_POST["idestudios"],
            $_POST["est_titulo"],
            $_POST["est_lugar"],
            $_POST["est_anno"],
            $_POST["est_tipo"],
        );
        break;

    case"guardaryeditar":
        if(empty($_POST["idestudios"])){
            $estudios->insert_estudios($_POST["est_titulo"],$_POST["est_lugar"],$_POST["est_anno"],$_POST["est_tipo"]);
        }else{
            $estudios->update_estudios($_POST["idestudios"],$_POST["est_titulo"],$_POST["est_lugar"],$_POST["est_anno"],$_POST["est_tipo"]);
        }
        break;

    case"eliminar":
        $estudios->delete_estudios($_POST["idestudios"]);
        break;

    case"listar":
        $datos=$estudios->get_estudios();
        $data=Array();
        foreach($datos as $row){
            $sub_array=array();
            $sub_array[]=$row["est_titulo"];
            $sub_array[]=$row["est_lugar"];
            $sub_array[]=$row["est_anno"];
            $sub_array[]=$row["est_tipo"];

            $sub_array[]='<button type="button" onClick="editar('.$row["idestudios"].');" id="'.$row["idestudios"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="bx bx-edit-alt"></i></div></button>';
            $sub_array[]='<button type="button" onClick="eliminar('.$row["idestudios"].');" id="'.$row["idestudios"].'"
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