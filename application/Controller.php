<?php

abstract class Controller
{
    protected $_view;
    protected $_acl;

    public function __construct() {
        $this->_acl = new Acl();
        $this->_view = new View(new Request,  $this->_acl);
        
        /*if($this->getInt('enviar') == 1){
            $this->_login = $this->loadModel('login');
            $this->_view->assign('datos',$_POST);
            
            if(!$this->getAlphaNum('usuario')){
                $this->_view->assign('_error', 'Debe introducir su usuario');
                $this->_view->renderizar('index','index');
                exit;
            }
            if(!$this->getSql('pass')){
                $this->_view->assign('_error', 'Debe introducir su password');
                $this->_view->renderizar('index','index');
                exit;
            }
            
            $row = $this->_login->getUsuario(
                    $this->getAlphaNum('usuario'),
                    $this->getSql('pass')
                    );
            if(!$row){
                $this->_view->assign('_error', 'Usuario y/o password incorrectos');
                $this->_view->renderizar('index','index');
                exit;
            }
            
            if($row['estado'] != 1){
                $this->_view->assign('_error', 'Este usuario no esta habilitado');
                $this->_view->renderizar('index','index');
                exit;
            }
            
            Session::set('autenticado', true);
            Session::set('level', $row['role']);
            Session::set('usuario', $row['usuario']);
            Session::set('id_usuario', $row['id']);
            Session::set('tiempo', time());
            
            $this->redireccionar($this->getTexto('de_donde'));
        }*/
        
    }
    
    abstract public function index();
    
    protected function loadModel($modelo) {
        $modelo = $modelo.'Model';
        $rutaModelo = ROOT.'models'.DS.$modelo.'.php';
                
        if(is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }else{
            throw new Exception('Error de Modelo');
        }
    }
    
    protected function getLibrary($libreria)
    {
        $rutaLibreria = ROOT . 'libs' . DS . $libreria . '.php';
        
        if(is_readable($rutaLibreria)){
            require_once $rutaLibreria;
        }
        else{
            throw new Exception('Error de libreria');
        }
    }
    
    protected function getTexto($clave) {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = htmlspecialchars($_POST[$clave],ENT_QUOTES);
            return $_POST[$clave];
        }else{
            return '';
        }
    }
    
    protected function getInt($clave){
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
            return $_POST[$clave];
        }else{
            return 0;
        }
    }
    
    protected function redireccionar($ruta=false){
        if($ruta){
            header('location:'.BASE_URL.$ruta);
            exit;
        }else{
            header('location:'.BASE_URL);
            exit;
        }
    }
    
    protected function filtrarInt($int) {
        $int = (int) $int;
        
        if(is_int($int)){
            return $int;            
        }else{
            return 0;
        }
    }
    
    protected function getPostParam($clave) {
        if(isset($_POST[$clave])){
            return $_POST[$clave];
        }
    }
    
    protected function getSql($clave) { // Limpia los strip tags y los pasa a escape_string
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = strip_tags($_POST[$clave]);
            
            if(!get_magic_quotes_gpc()){
                $_POST[$clave] = mysql_escape_string($_POST[$clave]);
            }
            return trim($_POST[$clave]);
        }
    }
    
    protected function getAlphaNum($clave) { // Solo acepta caracteres a-z y 0-9
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_POST[$clave]);
            return trim($_POST[$clave]);
        }
    }
    
    public function validarEmail($email) {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return false;
        }
        
        return true;
    }
    
}

?>

