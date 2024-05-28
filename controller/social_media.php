<?php 
require_once("../config/conexion.php");
require_once("../model/Social_Media.php");
$social_media=new SocialMedia();
switch($_GET["opc"]){
    
    case"mostrar":
        $datos =$social_media->get_socialMediaXid($_POST["idsocial_media"]);
        if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["socmed_icono"] = $row["socmed_icono"];
                $output["socmed_url"] = $row["socmed_url"];
            }
            echo json_encode($output);
        }
        break;

    case"modificar":
        $social_media->update_socialMedia(
            $_POST["idsocial_media"],
            $_POST["socmed_icono"],
            $_POST["socmed_url"]
        );
        break;

    case"guardaryeditar":
        if(empty($_POST["idsocial_media"])){
            $social_media->insert_socialMedia($_POST["socmed_icono"],$_POST["socmed_url"]);
        }else{
            $social_media->update_socialMedia($_POST["idsocial_media"],$_POST["socmed_icono"],$_POST["socmed_url"]);
        }
        break;

    case"eliminar":
        $social_media->delete_socialMedia($_POST["idsocial_media"]);
        break;

    case"listar":
        $datos=$social_media->get_socialMedia();
        $data=Array();
        foreach($datos as $row){
            $sub_array=array();
            $sub_array[]=$row["socmed_icono"];
            $sub_array[]=$row["socmed_url"];

            $sub_array[]='<button type="button" onClick="editar('.$row["idsocial_media"].');" id="'.$row["idsocial_media"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="bx bx-edit-alt"></i></div></button>';
            $sub_array[]='<button type="button" onClick="eliminar('.$row["idsocial_media"].');" id="'.$row["idsocial_media"].'"
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