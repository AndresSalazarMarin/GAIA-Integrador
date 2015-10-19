<?php

class aclModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getRole($roleId) {
        $role = $this->_db->query("select * from roles where id_role=$roleId");
        return $role->fetch();
    }
    
    public function getRoles() {
        $roles = $this->_db->query("select * from roles");
        return $roles->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getPermisosAll() {
        $permisos = $this->_db->query("select * from permisos");
        $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        
        $data = array();
        
        for($i=0; $i<count($permisos);$i++){
            if($permisos[$i]['llave'] == ''){continue;}
            $data[$permisos[$i]['llave']] = array(
                'key' => $permisos[$i]['llave'],
                'valor' => 'x',
                'nombre' => $permisos[$i]['permiso'],
                'id' => $permisos[$i]['id_permiso']
            );
        }
        
        return $data;
    }
    
    public function getPermisosRole($roleId) {
        $data = array();
        
        $permisos = $this->_db->query("select * from permisos_role where role=$roleId");
        $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);
        
        $data = array();
        
        for($i=0; $i<count($permisos);$i++){
            $key = $this->getPermisoKey($permisos[$i]['permiso']);
            
            if($key == ''){continue;}
            
            if($permisos[$i]['valor'] == 1){
                $v = true;
            }else{
                $v = false;
            }
            
            $data[$key] = array(
                'key' => $key,
                'valor' => $v,
                'nombre' => $this->getPermisoNombre($permisos[$i]['permiso']),
                'id' => $permisos[$i]['permiso']
            );
        }
        
        $data = array_merge($this->getPermisosAll(), $data);
        return $data;
    }
    
    public function insertarRole($role)
    {
        $this->_db->query("INSERT INTO roles VALUES(null, '{$role}')");
    }
    
    public function getPermisos()
    {
        $permisos = $this->_db->query("SELECT * FROM permisos");
        
        return $permisos->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function eliminarPermisoRole($roleId, $permisoId) {
        $this->_db->query("delete from permisos_role where role=$roleId and permiso=$permisoId");
    }
    
    public function editarPermisoRole($roleId, $permisoId, $valor) {
        $this->_db->query("replace into permisos_role set role=$roleId, permiso=$permisoId, valor='$valor'");
    }
    
    public function getPermisoKey($permisoId) {
        $permisoId = (int) $permisoId;
        $key = $this->_db->query("select llave from permisos where id_permiso={$permisoId}");
        $key = $key->fetch();
        return $key['llave'];
    }
    
    public function getPermisoNombre($permisoId) {
        $permisoId = (int) $permisoId;
        $permiso = $this->_db->query("select permiso from permisos where id_permiso={$permisoId}");
        $permiso = $permiso->fetch();
        return $permiso['permiso'];
    }

    public function insertarPermiso($permiso, $llave)
    {
        $this->_db->query(
                "INSERT INTO permisos VALUES" .
                "(null, '{$permiso}', '{$llave}')"
                );
    }
    
}

?>

