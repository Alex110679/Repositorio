<?php 
class Experiencia extends Conectar{
    public function get_experiencia(){
        $exp=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM experiencia WHERE est=1";
        $sql=$exp->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_experienciaXid($idexperiencia){
        $exp=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM experiencia WHERE est=1 AND idexperiencia=?";
        /*$sql="SELECT * FROM experiencia WHERE idexperiencia=?";*/
        $sql=$exp->prepare($sql);
        $sql->bindValue(1,$idexperiencia);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

    public function insert_experiencia($exp_titulo,$exp_lugar,$exp_annoIni,$exp_annoFin,$exp_tipo){
        $exp=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO experiencia (idexperiencia,exp_titulo,exp_lugar,exp_annoIni,exp_annoFin,exp_tipo,est) VALUES(NULL,?,?,?,?,?,1)";
        $sql=$exp->prepare($sql);
        $sql->bindValue(1,$exp_titulo);
        $sql->bindValue(2,$exp_lugar);
        $sql->bindValue(3,$exp_annoIni);
        $sql->bindValue(4,$exp_annoFin);
        $sql->bindValue(5,$exp_tipo);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_experiencia($idexperiencia,$exp_titulo,$exp_lugar,$exp_annoIni,$exp_annoFin,$exp_tipo){
        $exp=parent::conexion();
        parent::set_names();
        $sql="UPDATE experiencia 
            SET 
            exp_titulo=?,
                exp_lugar=?,
                exp_annoIni=?,
                exp_annoFin=?,
                exp_tipo=?
            WHERE 
                idexperiencia=?";       
        
        $sql=$exp->prepare($sql);
        $sql->bindValue(1,$exp_titulo);
        $sql->bindValue(2,$exp_lugar);
        $sql->bindValue(3,$exp_annoIni);
        $sql->bindValue(4,$exp_annoFin);
        $sql->bindValue(5,$exp_tipo);
        $sql->bindValue(3,$idexperiencia);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function delete_expMedia($idexperiencia){
        $exp=parent::conexion();
        parent::set_names();
        $sql="UPDATE experiencia SET est=0 WHERE idexperiencia=?";
        $sql=$exp->prepare($sql);
        $sql->bindValue(1,$idexperiencia);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }
}


?>