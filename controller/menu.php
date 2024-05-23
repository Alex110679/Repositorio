<?php 
require_once("../config/conexion.php");
require_once("../model/menu.php");
$menu=new Menu();
switch($_GET["op"]){
    
    case"mostrar":
        $datos =$menu->get_menuXid($_POST["idmenu"]);
        if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["opcion"] = $row["opcion"];
                $output["url"] = $row["url"];
            }
            echo json_encode($output);
        }
        break;

    case"modificar":
        $menu->update_menu(
            $_POST["idmenu"],
            $_POST["opcion"],
            $_POST["url"],
        );
        break;

    case"guardaryeditar":
        if(empty($_POST["idmenu"])){
            $menu->insert_menu($_POST["opcion"],$_POST["url"]);
        }else{
            $menu->update_menu($_POST["idmenu"],$_POST["opcion"],$_POST["url"]);
        }
        break;

    case"eliminar":
        $menu->delete_menu($_POST["idmenu"]);
        break;

    case"listar":
        $datos=$menu->get_menu();
        $data=Array();
        foreach($datos as $row){
            $sub_array=array();
            $sub_array[]=$row["opcion"];
            $sub_array[]=$row["url"];

            $sub_array[]='<button type="button" onClick="editar('.$row["idmenu"].');" id="'.$row["idmenu"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[]='<button type="button" onClick="eliminar('.$row["idmenu"].');" id="'.$row["idmenu"].'"
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