<?php

class registroModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function verificarUsuario($usuario) { //Verificar si el usuario que se intenta registrar coloca un nombre de usuario que ya existe en la BD
        $id = $this->_db->query("select * from usuario where usu_nom_usu = '$usuario'");
        if(is_array($id)){
            return true;
        }
        return false;
    }
    public function verificarEmail($email) { //Verificar si el usuario que se intenta registrar coloca un nombre de usuario que ya existe en la BD
        $reg = $this->_db->query("select * from usuario where usu_correo = '$email'");
        if(is_array($reg)){
            return true;
        }
        return false;        
    }
    
    public function registrarUsuario($usuario, $nombre, $apellido, $password, $email, $rol, $fec_nac) {
        $random = rand(1782598471,9999999999);
        $password = md5($password);
        
        $app = $this->_db->query("select * from aplicacion where app_id=1");
        $app = $app->fetchall();
        
        foreach ($app as $key => $value) {
            $this->_dbFroac = new Database($value['app_nom_bd'],$value['app_host'],$value['app_nom_usu'],$value['app_clave'],$value['app_puerto']);
        }
        
        $this->_db->query("insert into usuario (usu_nom_usu, usu_nom, usu_apell, usu_clave, usu_correo, usu_fecha_reg, usu_fecha_nac) values ('$usuario','$nombre','$apellido','$password','$email',now(),'$fec_nac')");
        
        foreach($rol as $i=>$key){
            $this->_db->query("insert into usu_rol (ur_id_usu,ur_rol,ur_estado) values ('$usuario', $key, TRUE)");
            $this->_dbFroac->query("insert into users (use_username, use_nombre, use_apellido, use_clave, use_email, use_fecha_registro, use_rol_id, use_datebirth) values ('$usuario','$nombre','$apellido','$password','$email',now(),$key,'$fec_nac')");
        }
    }
    public function getUsuario($id, $codigo) {
        $id = (int) $id;
        $codigo = (int) $codigo;
        $usuario = $this->_db->query(
                "selesct * from usuarios where id = $id and codigo = $codigo"
                );
        return $usuario->fetch();
    }
    public function activarUsuario($id, $codigo) {
        $id = (int) $id;
        $codigo = (int) $codigo;
        $this->_db->query(
                "update usuarios set estado = 1 where id = $id and codigo = '$codigo'"
                );
    }
}

?>