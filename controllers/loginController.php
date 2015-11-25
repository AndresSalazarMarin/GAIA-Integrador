<?php

class loginController extends Controller{
    
    private $_login;
    
    public function __construct() {
        parent::__construct();
        $this->_login = $this->loadModel('login');
    }
    
    public function index(){
        
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        
        $this->_view->assign('titulo', 'Iniciar Sesión');
        
        if($this->getInt('enviar') == 1){
            $this->_view->assign('datos',$_POST);
            
            if(!$this->getAlphaNum('usuario')){
                $this->_view->assign('_error', 'Debe introducir su usuario');
                $this->_view->renderizar('index','login');
                exit;
            }
            if(!$this->getSql('pass')){
                $this->_view->assign('_error', 'Debe introducir su password');
                $this->_view->renderizar('index','login');
                exit;
            }
            
            $row = $this->_login->getUsuario(
                    $this->getAlphaNum('usuario'),
                    $this->getSql('pass')
                    );
            if(!$row){
                $this->_view->assign('_error', 'Usuario y/o password incorrectos');
                $this->_view->renderizar('index','login');
                exit;
            }
            
            /*if($row['estado'] != 1){
                $this->_view->assign('_error', 'Este usuario no esta habilitado');
                $this->_view->renderizar('index','login');
                exit;
            }*/
            
            $permisos = $this->_acl->getRolUsuario($row['usu_nom_usu']);
            $roles = Array();
            
            foreach($permisos as $i=>$key){
                array_push($roles, $key['ur_rol']);
            }
            
            $rol = $this->_acl->getNombreRol($roles[0]);
            
            Session::set('autenticado', true);
            Session::set('usuario', $row['usu_nom_usu']);
            Session::set('nombre', $row['usu_nom']);
            Session::set('contraseña', $this->getSql('pass'));
            Session::set('tipo_v', $rol['rol_nom']);
            Session::set('tiempo', time());
            
            $this->redireccionar($_POST['de_donde']);
        }
        $this->_view->renderizar('index','login');
    }
        
    public function cerrar() {
        Session::destroy();
        $this->redireccionar();
    }
}

?>