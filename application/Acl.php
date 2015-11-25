<?php

class Acl{
    
    private $_db;
    private $_id;
    private $_role;
    private $_permisos;
    
    public function __construct($id = false) {
        if($id){
            $this->_id = (int) $id;
        }else{
            if(Session::get('id_usuario')){
               $this->_id = Session::get('id_usuario'); 
            }else{
                $this->_id = 0;
            }
        }
        
        $this->_db = new Database('RAIM','localhost','postgres','admin',5432);
        $this->_role = $this->getRol();
    }
    
    public function getRol() {
        $role = $this->_db->prepare("select * from rol");
        $role->execute();
        $this->_db->close_con();
        $role = $role->fetchAll(PDO::FETCH_ASSOC);
        return $role;
    }
    
    public function getNombreRol($dato) {
        $role = $this->_db->prepare("select rol_nom from rol where rol_id='$dato'");
        $role->execute();
        $this->_db->close_con();
        $role = $role->fetch();
        return $role;
    }
    
    public function getRolUsuario($usu) {        
        if($usu!=''){
            $permisos = $this->_db->prepare("select * from usu_rol where ur_id_usu='$usu'");
            $permisos->execute();
            $this->_db->close_con();
            $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $permisos = array();
        }
        return $permisos;
    }
    
    
    public function noAcceso(){
        header('location: '.BASE_URL.'error/access/5050');
        exit;
    }
    
    public function permiso($valor){
        if(Session::get('tipo_v') == $valor){
            return TRUE;
        }
        return FALSE;
    }


    public function acceso($valor){
        
        if($this->permiso($valor)){
            //Session::tiempo();
            return;
        }
        
        header('location: '.BASE_URL.'error/access/5050');
    }    
}

?>