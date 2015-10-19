<?php

class aplicacionesController extends Controller
{
    
    private $_aplicacion;

    public function __construct() {
        parent::__construct();
        $this->_aplicacion = $this->loadModel('aplicaciones');
    }
    public function index(){
        $roles = Array();
        if(Session::get('autenticado')){
            $permisos = $this->_acl->getRolUsuario(Session::get('usuario'));
            foreach($permisos as $i=>$key){
                if($key['ur_rol'] == 1){
                    $roles[] = array(
                        'rol' => 'Administrador'
                    );
                    $this->_view->assign('acceso','admin_access');
                }else if($key['ur_rol'] == 2){
                    $roles[] = array(
                        'rol' => 'Profesor'
                    );
                }else if($key['ur_rol'] == 3){
                    $roles[] = array(
                        'rol' => 'Estudiante'
                    );
                }
            }
        }
        $this->_view->assign('titulo', 'Aplicaciones');
        $this->_view->assign('roles',$roles);
        $this->_view->assign('aplicaciones',  $this->_aplicacion->getApps());
        $this->_view->setJs(array('app'));
        $this->_view->renderizar('index', 'aplicaciones');
    }
    
    public function administrador(){
        $roles = Array();
        if(Session::get('autenticado')){
            $permisos = $this->_acl->getRolUsuario(Session::get('usuario'));
            foreach($permisos as $i=>$key){
                if($key['ur_rol'] == 1){
                    $roles[] = array(
                        'rol' => 'Administrador'
                    );
                }else if($key['ur_rol'] == 2){
                    $roles[] = array(
                        'rol' => 'Profesor'
                    );
                }else if($key['ur_rol'] == 3){
                    $roles[] = array(
                        'rol' => 'Estudiante'
                    );
                }
            }
        }
        $this->_view->assign('titulo', 'Gestor Aplicaciones');
        $this->_view->assign('roles',$roles);
        $this->_view->assign('acceso','admin_access');
        $this->_view->assign('aplicaciones',  $this->_aplicacion->getApps());
        $this->_view->setJs(array('app'));
        $this->_view->renderizar('index', 'aplicaciones');
    }
    
    public function estudiante(){
        $roles = Array();
        if(Session::get('autenticado')){
            $permisos = $this->_acl->getRolUsuario(Session::get('usuario'));
            foreach($permisos as $i=>$key){
                if($key['ur_rol'] == 1){
                    $roles[] = array(
                        'rol' => 'Administrador'
                    );
                }else if($key['ur_rol'] == 2){
                    $roles[] = array(
                        'rol' => 'Profesor'
                    );
                }else if($key['ur_rol'] == 3){
                    $roles[] = array(
                        'rol' => 'Estudiante'
                    );
                }
            }
        }
        $this->_view->assign('titulo', 'Gestor Aplicaciones');
        $this->_view->assign('roles',$roles);
        $this->_view->assign('aplicaciones',  $this->_aplicacion->getApps());
        $this->_view->setJs(array('app'));
        $this->_view->renderizar('index', 'aplicaciones');
    }
    
    public function nuevo(){
        $this->_view->assign('titulo', 'Nueva Aplicación');
        $this->_view->assign('tipo_app',  $this->_aplicacion->getTipoApp());
        $this->_view->setJs(array('app'));
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getTexto('nombre')){
                $this->_view->assign('_error', 'Debe introducir nombre');
                $this->_view->renderizar('nuevo','aplicaciones');
                exit;
            }
            if(!$this->getTexto('descp')){
                $this->_view->assign('_error', 'Debe introducir una descripción');
                $this->_view->renderizar('nuevo','aplicaciones');
                exit;
            }
            //Agregar demás verificaciones
            
            $imagen = '';
            
            if(isset($_FILES['imagen']['name'])){
                $this->getLibrary('upload'.DS.'class.upload');
                $ruta = ROOT.'public'.DS.'img'.DS.'apps'.DS;
                $upload = new upload($_FILES['imagen'],'es_Es');
                $upload->allowed = array('image/*');
                $upload->file_new_name_body = 'upl_'.uniqid();
                $upload->process($ruta);
                
                if($upload->processed){
                    $imagen = $upload->file_dst_name;
                    $thumb = new upload($upload->file_dst_pathname);
                    $thumb->image_resize = true;
                    $thumb->image_x = 100;
                    $thumb->image_y = 70;
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process($ruta.'thumb'.DS);
                }else{
                    $this->_view->assign('_error',$upload->error);
                    $this->_view->renderizar('nuevo','aplicacion');
                    exit;
                }
            }
            
            if($this->_aplicacion->crearApp($_POST['nombre'],$_POST['descp'],$imagen,$_POST['url'],$_POST['host'],$_POST['usu'],$_POST['clave'],$_POST['nom_bd'],$_POST['puerto'],$_POST['tipo'])){
                $this->_view->assign('datos', false);
                $this->_view->assign('_confirmacion', 'Conexión exitosa');
                $this->_view->renderizar('nuevo','aplicaciones');
                exit;
            }else{
                $this->_view->assign('_confirmacion', 'No se realizo la conexión, verifique los datos');
                $this->_view->renderizar('nuevo','aplicaciones');
                exit;
            }
            
        }
        $this->_view->renderizar('nuevo', 'aplicaciones');
    }
}

?>
