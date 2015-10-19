<?php

class loginModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuario($usuario, $password) {
        //$datos = $this->_db->query("select * from usuarios where usuario = '$usuario' and pass = '".Hash::getHash(TIP_ENC,$password,HASH_KEY)."'");
        //Conexion RAIM $datos = $this->_db->query("select * from usuario where usu_nom_usu = '$usuario' and usu_clave = '".Hash::getHash(TIP_ENC,$password,HASH_KEY)."'");
        $datos = $this->_db->query("select * from usuario where usu_nom_usu = '$usuario' and usu_clave = '".md5($password)."'");
        return $datos->fetch();
    }
}

?>

