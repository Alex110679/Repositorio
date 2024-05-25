<?php 
class SocialMedia extends Conectar{
    public function get_socialMedia(){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM social_media WHERE est=1";
        $sql=$social->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    
    public function get_socialMediaXid($idsocial_media){
        $social=parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM social_media WHERE est=1 AND idsocial_media=?";
        /*$sql="SELECT * FROM social_media WHERE idsocial_media=?";*/
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idsocial_media);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    

    public function insert_socialMedia($socmed_icono,$socmed_url){
        $social=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO social_media (idsocial_media,socmed_icono,socmed_url,est) VALUES(NULL,?,?,1)";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$socmed_icono);
        $sql->bindValue(2,$socmed_url);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_socialMedia($idsocial_media,$socmed_icono,$socmed_url){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE social_media 
            SET 
                socmed_icono=?,
                socmed_url=?
            WHERE 
                idsocial_media=?";       
        
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$socmed_icono);
        $sql->bindValue(2,$socmed_url);
        $sql->bindValue(3,$idsocial_media);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function delete_socialMedia($idsocial_media){
        $social=parent::conexion();
        parent::set_names();
        $sql="UPDATE social_media SET est=0 WHERE idsocial_media=?";
        $sql=$social->prepare($sql);
        $sql->bindValue(1,$idsocial_media);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
    }
}


?>