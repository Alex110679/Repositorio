<?php 
class Informacion_personal extends Conectar{
    public function get_informacion_personal(){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM informacion_personal WHERE est=1";
        $sql=$social->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_informacion_personalXid($idinformacion_personal){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM informacion_personal WHERE idinformacion_personal=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idinformacion_personal);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

    public function insert_informacion_personal($info_nacimiento,$info_celular,$info_email,$info_url,$info_direccion,$info_cargo){
        $social=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO informacion_personal (idinformacion_personal,info_nacimiento,info_celular,info_email,info_url,info_direccion,info_cargo,est) VALUES(NULL,?,?,?,?,?,?,1)";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$info_nacimiento);
        $sql->bindValue(2,$info_celular);
        $sql->bindValue(3,$info_email);
        $sql->bindValue(4,$info_url);
        $sql->bindValue(5,$info_direccion);
        $sql->bindValue(6,$info_cargo);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_informacion_personal($idinformacion_personal,$info_nacimiento,$info_celular,$info_email,$info_url,$info_direccion,$info_cargo){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE informacion_personal
            SET 
            info_nacimiento=?,
            info_celular=?,
            info_email=?,
            info_url=?,
            info_direccion=?,
            info_cargo=?

            WHERE 
                idinformacion_personal=?";       
        
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$info_nacimiento);
        $sql->bindValue(2,$info_celular);
        $sql->bindValue(3,$info_email);
        $sql->bindValue(4,$info_url);
        $sql->bindValue(5,$info_direccion);
        $sql->bindValue(6,$info_cargo);
        $sql->bindValue(7,$idinformacion_personal);

        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function delete_informacion_personal($idinformacion_personal){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE informacion_personal SET est=0 WHERE idinformacion_personal=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idinformacion_personal);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }
}
?>