<?php

class usuariosController extends Controller{
    
    private $_usuarios;

    public function __construct() {
        parent::__construct();
        $this->_usuarios = $this->loadModel('usuarios');
    }
    
    public function index() {
        if(Session::get('autenticado')){
            $permisos = $this->_acl->getPermisosUsuario(Session::get('id_usuario'));
            if(array_key_exists('admin_access', $permisos)){
                $this->_view->assign('titulo','Administración de Usuarios');
                $this->_view->assign('usuarios',  $this->_usuarios->getUsuarios());
                $this->_view->renderizar('index','usuarios');
                exit;
            }
        }
        $this->_view->assign('titulo','Usuarios');
        $this->_view->assign('usuarios',  $this->_usuarios->getUsuarios());
        $this->_view->renderizar('index','usuarios');
    }
    
    public function permisos($usuarioId) {
        $id = $this->filtrarInt($usuarioId);
        
        if(!$id){
            $this->redireccionar('usuarios');
        }
        
        if($this->getInt('guardar') == 1){
            $values = array_keys($_POST);
            $replace = array();
            $eliminar = array();
            
            for($i=0; $i<count($values);$i++){
                if(substr($values[$i],0,5) == 'perm_'){
                    $permiso = (strlen($values[$i])-5);
                    if($_POST[$values[$i]] == 'x'){
                        $eliminar[] = array(
                            'usuario' => $id,
                            'permiso' => substr($values[$i],-$permiso)
                        );
                    }else{
                        if($_POST[$values[$i]] == 1){
                            $v=1;
                        }else{
                            $v=0;
                        }
                        
                        $replace[] = array(
                            'usuario' => $id,
                            'permiso' => substr($values[$i],-$permiso),
                            'valor' => $v
                        );
                        
                    }
                }                
            }
            
            for($i=0; $i<count($eliminar); $i++){
                $this->_usuarios->eliminarPermiso(
                        $eliminar[$i]['usuario'],
                        $eliminar[$i]['permiso']
                        );
            }
            
            for($i=0; $i<count($replace); $i++){
                $this->_usuarios->editarPermiso(
                        $replace[$i]['usuario'],
                        $replace[$i]['permiso'],
                        $replace[$i]['valor']
                        );
            }
        }
        
        $permisosUsuario = $this->_usuarios->getPermisosUsuario($id);
        $permisosRole = $this->_usuarios->getPermisosRole($id);
        
        if(!$permisosUsuario || !$permisosRole){
            $this->redireccionar('usuarios');
        }
        
        $this->_view->assign('titulo','Permisos de Usuario');
        $this->_view->assign('permisos', array_keys($permisosUsuario));
        $this->_view->assign('usuario',  $permisosUsuario);
        $this->_view->assign('role',  $permisosRole);
        $this->_view->assign('info', $this->_usuarios->getUsuario($id));
        $this->_view->renderizar('permisos');
        
    }
    
}

?>

