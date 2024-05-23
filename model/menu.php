<?php 
class Menu extends Conectar{
    public function get_menu(){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM menu WHERE est=1";
        $sql=$social->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_menuXid($idmenu){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM menu WHERE idmenu=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idmenu);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

    public function insert_menu($opcion,$url){
        $social=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO menu (idmenu,opcion,url,est) VALUES(NULL,?,?,1)";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$opcion);
        $sql->bindValue(2,$url);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_menu($idmenu,$opcion,$url){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE menu
            SET 
            opcion=?,
            url=? 

            WHERE 
                idmenu=?";       
        
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$opcion);
        $sql->bindValue(2,$url);
        $sql->bindValue(3,$idmenu);

        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function delete_menu($idmenu){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE menu SET est=0 WHERE idmenu=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idmenu);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }
}
?>