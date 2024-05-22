<?php 
class Experiencia extends Conectar{
    public function get_experiencia(){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM experiencia WHERE est=1";
        $sql=$social->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    /*public function get_experiencia_con_parametros($idexperiencia){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM experiencia WHERE idexperiencia=?";
        $sql=$social->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }*/
    

    public function insert_experiencia($exp_titulo,$exp_lugar,$exp_annoIni,$exp_annoFin,$exp_tipo){
        $social=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO experiencia (idexperiencia,exp_lugar,exp_annoIni,exp_annoFin,exp_tipo,est) VALUES(NULL,?,?,?,?,?,1)";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$exp_titulo);
        $sql->bindValue(2,$exp_lugar);
        $sql->bindValue(3,$exp_annoIni);
        $sql->bindValue(4,$exp_annoFin);
        $sql->bindValue(5,$exp_tipo);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_experiencia($idexperiencia,$exp_titulo,$exp_lugar,$exp_annoIni,$exp_annoFin,$exp_tipo){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE experiencia
            SET 
                exp_lugar=?,
                exp_annoIni=?,
                exp_annoFin=?,
                exp_tipo=?
            WHERE 
                idexperiencia=?";       
        
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$exp_titulo);
        $sql->bindValue(2,$exp_lugar);
        $sql->bindValue(3,$exp_annoIni);
        $sql->bindValue(4,$exp_annoFin);
        $sql->bindValue(5,$exp_tipo);
        $sql->bindValue(6,$idexperiencia);

        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function delete_experiencia($idexperiencia){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE experiencia SET est=0 WHERE idexperiencia=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idexperiencia);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }
}
?>