<?php

class usuariosModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuarios() {
        $usuarios = $this->_db->query("select u.*,r.role from usuarios u, roles r where u.role = r.id_role");
        return $usuarios->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getUsuario($usuarioId) {
        $usuarios = $this->_db->query("select u.usuario,r.role from usuarios u, roles r where u.role = r.id_role and u.id = $usuarioId");
        return $usuarios->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getPermisosUsuario($usuarioId) {
        $acl = new Acl($usuarioId);
        return $acl->getPermisos();
    }
    
    public function getPermisosRole($usuarioId) {
        $acl = new Acl($usuarioId);
        return $acl->getPermisosRole();
    }
    
    public function eliminarPermiso($usuarioId, $permisoId) {
        $this->_db->query("delete from permisos_usuario where usuario=$usuarioId and permiso=$permisoId");
    }
    
    public function editarPermiso($usuarioId, $permisoId, $valor) {
        $this->_db->query("replace into permisos_usuario set usuario=$usuarioId, permiso=$permisoId, valor='$valor'");
    }
    
}

?>

