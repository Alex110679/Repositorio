<?php 
class Trabajos_realizados extends Conectar{
    public function get_trabajos_realizados(){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM trabajos_realizados WHERE est=1";
        $sql=$social->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_trabajos_realizadosXid($idtrabajos_realizados){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM trabajos_realizados WHERE est=1 AND idtrabajos_realizados=?";
        /*$sql="SELECT * FROM trabajos_realizados WHERE idtrabajos_realizados=?";*/
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idtrabajos_realizados);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

    public function insert_trabajos_realizados(/*$fil_id,$work_img,*/$work_titulo,$work_descripcion,$work_fecha,$work_rol/*,$work_tecnologia*/){
        $social=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO trabajos_realizados (idtrabajos_realizados,/*fil_id,work_img,*/work_titulo,work_descripcion,work_fecha,work_rol,/*work_tecnologia*/,est) VALUES(NULL,?,?,?,?,1)";
        $sql=$social->prepare($sql);
        /*$sql->bindValue(1,$fil_id);
        $sql->bindValue(2,$work_img);*/
        $sql->bindValue(1,$work_titulo);
        $sql->bindValue(2,$work_descripcion);
        $sql->bindValue(3,$work_fecha);
        $sql->bindValue(4,$work_rol);
        /*$sql->bindValue(7,$work_tecnologia);*/
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_trabajos_realizados($idtrabajos_realizados/*,$fil_id,$work_img,*/,$work_titulo,$work_descripcion,$work_fecha,$work_rol/*,$work_tecnologia*/){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE trabajos_realizados
            SET 
            /*fil_id=?,
            work_img=?,*/
            work_titulo=?,
            work_descripcion=?,
            work_fecha=?,
            work_rol=?,
            /*work_tecnologia=?*/
            
            WHERE 
                idtrabajos_realizados=?";       
        
        $sql=$social->prepare($sql);
        /*$sql->bindValue(1,$fil_id);
        $sql->bindValue(2,$work_img);*/
        $sql->bindValue(1,$work_titulo);
        $sql->bindValue(2,$work_descripcion);
        $sql->bindValue(3,$work_fecha);
        $sql->bindValue(4,$work_rol);
        /*$sql->bindValue(7,$work_tecnologia);*/
        $sql->bindValue(5,$idtrabajos_realizados);

        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function delete_trabajos_realizados($idtrabajos_realizados){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE trabajos_realizados SET est=0 WHERE idtrabajos_realizados=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idtrabajos_realizados);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }
}
?>