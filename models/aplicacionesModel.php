<?php

class aplicacionesModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function getApps() {
        $app = $this->_db->query("select * from aplicacion");
        return $app->fetchall();
    }
    
    public function getTipoApp(){
        $tipo_app= $this->_db->query("select * from tipo_app");
        return $tipo_app->fetchall();
    }
    
    public function crearApp($nom,$descp,$img,$url,$host,$usu,$clave,$nom_bd,$puerto,$tipo){
        $this->_newDB = new Database($nom_bd,$host,$usu,$clave,$puerto);
        if($this->_newDB){
            $app = $this->_db->query(
                "insert into aplicacion (app_nom, app_descp, app_img, app_url, app_host, app_nom_usu, app_clave, app_nom_bd, app_puerto, app_tipo) values ('$nom','$descp','$img','$url','$host','$usu','$clave','$nom_bd',$puerto,$tipo)"
                );
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

?>

