<?php 
class Menu extends Conectar{
    public function get_menu(){
        $menu=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM menu WHERE est=1";
        $sql=$menu->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_menuXid($idmenu){
        $menu=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM menu WHERE est=1 AND idmenu=?";
        /*$sql="SELECT * FROM menu WHERE idmenu=?";*/
        $sql=$menu->prepare($sql);
        $sql->bindValue(1,$idmenu);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

    public function insert_menu($menu_opcion,$menu_url){
        $menu=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO menu (idmenu,menu_opcion,menu_url,est) VALUES(NULL,?,?,1)";
        $sql=$menu->prepare($sql);
        $sql->bindValue(1,$menu_opcion);
        $sql->bindValue(2,$menu_url);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_menu($idmenu,$menu_opcion,$menu_url){
        $menu=parent::conexion();
        parent::set_names();
        $sql="UPDATE menu SET menu_opcion=?,menu_url=? WHERE idmenu=?";
        $sql=$menu->prepare($sql);
        $sql->bindValue(1,$menu_opcion);
        $sql->bindValue(2,$menu_url);
        $sql->bindValue(3,$idmenu);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function delete_menu($idmenu){
        $menu=parent::conexion();
        parent::set_names();
        $sql="UPDATE menu SET est=0 WHERE idmenu=?";
        $sql=$menu->prepare($sql);
        $sql->bindValue(1,$idmenu);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }
}


?>