<?php 
class Estudios extends Conectar{
    public function get_estudios(){
        $estudi=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM estudios WHERE est=1";
        $sql=$estudi->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_estudiosXid($idestudios){
        $estudi=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM estudios WHERE est=1 AND idestudios=?";
        /*$sql="SELECT * FROM estudios WHERE idestudios=?";*/
        $sql=$estudi->prepare($sql);
        $sql->bindValue(1,$idestudios);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

    public function insert_estudios($est_titulo,$est_lugar,$est_anno,$est_tipo){
        $estudi=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO estudios (idestudios,est_titulo,est_lugar,est_anno,est_tipo,est) VALUES(NULL,?,?,?,?,1)";
        $sql=$estudi->prepare($sql);
        $sql->bindValue(1,$est_titulo);
        $sql->bindValue(2,$est_lugar);
        $sql->bindValue(3,$est_anno);
        $sql->bindValue(4,$est_tipo);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_estudios($idestudios,$est_titulo,$est_lugar,$est_anno,$est_tipo){
        $estudi=parent::conexion();
        parent::set_names();
        $sql="UPDATE estudios 
            SET 
            est_titulo=?,
            est_lugar=?,
            est_anno=?,
            est_tipo=?
            WHERE 
                idestudios=?";       
        
        $sql=$estudi->prepare($sql);
        $sql->bindValue(1,$est_titulo);
        $sql->bindValue(2,$est_lugar);
        $sql->bindValue(3,$est_anno);
        $sql->bindValue(4,$est_tipo);
        $sql->bindValue(5,$idestudios);
        
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function delete_estudios($idestudios){
        $estudi=parent::conexion();
        parent::set_names();
        $sql="UPDATE estudios SET est=0 WHERE idestudios=?";
        $sql=$estudi->prepare($sql);
        $sql->bindValue(1,$idestudios);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }
}


?>