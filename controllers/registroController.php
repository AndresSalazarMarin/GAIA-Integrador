<?php

class registroController extends Controller{
    
    private $_registro;
    
    public function __construct() {
        parent::__construct();
        $this->_registro = $this->loadModel('registro');
    }
    
    public function index() {
        if(Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->assign('educa',$this->_registro->getNivelEduc());
        $this->_view->assign('preferencias',$this->_registro->getPreferencias());
        $this->_view->assign('titulo', "Crear Cuenta");
        $this->_view->setJs(array('registro'));
        
        if(isset($_GET['form'])){//$this->getInt('enviar') == 1){
            $this->_view->assign('datos', $_POST);
            if($_GET['form'] == 1){
                
                $this->_registro->registrarUsuario(
                        $_POST['nomb_usuario'],
                        $_POST['nombre'],
                        $_POST['apellido'],
                        $_POST['pass'],
                        $_POST['email'],
                        $_POST['rol'],
                        $_POST['fecha_nac']);
                
                if(!$this->getSql('nombre')){
                    $this->_view->assign('_error', "Debe introducir su nombre");
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                if(!$this->getSql('apellido')){
                    $this->_view->assign('_error', "Debe introducir su apellido");
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                if(!$this->getSql('fecha_nac')){
                    $this->_view->assign('_error', "Debe introducir su fecha_nac");
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                if(!$this->validarEmail($this->getPostParam('email'))){
                    $this->_view->assign('_error', "La dirección de email es inválida");
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                if($this->_registro->verificarEmail($this->getPostParam('email'))){
                    $this->_view->assign('_error', "Esta dirección ya esta registrada");
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                if(!$this->getAlphaNum('nomb_usuario')){
                    $this->_view->assign('_error', "Debe introducir su usuario");
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                if($this->_registro->verificarUsuario($this->getAlphaNum('nomb_usuario'))){
                    $this->_view->assign('_error', "El usuario " .$this->getAlphaNum('usuario'). " ya existe");
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                if(!$this->getSql('pass')){
                    $this->_view->assign('_error', "Debe introducir su password");
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                if($this->getPostParam('pass') != $this->getPostParam('confirmar')){
                    $this->_view->assign('_error', "Los passwords no coinciden");
                    $this->_view->renderizar('index','registro');
                    exit;
                }

                $this->_registro->registrarUsuario(
                        $_POST['nomb_usuario'],
                        $_POST['nombre'],
                        $_POST['apellido'],
                        $_POST['pass'],
                        $_POST['email'],
                        $_POST['rol'],
                        $_POST['fecha_nac']);

                $usuario = $this->_registro->verificarUsuario($this->getAlphaNum('nomb_usuario'));

                if($usuario){
                    $this->_view->assign('_error', 'Error al registrar el usuario');
                    $this->_view->renderizar('index','registro');
                    exit;
                }
                $this->_view->assign('_mensaje', 'Registro Completado, revise su email para activar su cuenta');
            }else if($_GET['form'] == 2){
                $cant_V = 0;
                $cant_A = 0;
                $cant_R = 0;
                $cant_K = 0;

                $cant_G = 0;
                $cant_S = 0;

                for ($i = 1; $i <= 13; $i++) {
                    if ($this->getPostParam($i) == 'V')
                        $cant_V++;

                    if ($this->getPostParam($i) == 'A')
                        $cant_A++;

                    if ($this->getPostParam($i) == 'R')
                        $cant_R++;

                    if ($this->getPostParam($i) == 'K')
                        $cant_K++;
                }

                for ($j = 49; $j <= 70; $j++) {
                    if ($this->getPostParam($j) == 'G')
                        $cant_G++;
                    if ($this->getPostParam($j) == 'S')
                        $cant_S++;
                }

                $puntaje = 0;
                if ($cant_V >= $cant_A && $cant_V >= $cant_R && $cant_V >= $cant_K) {
                    $mayor = 7; //Visual
                    $puntaje = $cant_V;
                } else
                if ($cant_A >= $cant_V && $cant_A >= $cant_R && $cant_A >= $cant_K) {
                    $mayor = 1; //Auditivo
                    $puntaje = $cant_A;
                } else
                if ($cant_R >= $cant_V && $cant_R >= $cant_A && $cant_R >= $cant_K) {
                    $mayor = 5; //Lector
                    $puntaje = $cant_R;
                } else
                if ($cant_K >= $cant_R && $cant_K >= $cant_V && $cant_K >= $cant_A) {
                    $mayor = 3; //kinestesico
                    $puntaje = $cant_K;
                }

                if ($cant_G >= $cant_S) {
                    $mayor = $mayor + 0; //Global
                    $puntaje = $puntaje . '-' . $cant_G;
                } else {
                    $mayor = $mayor + 1; //Secuencial
                    $puntaje = $puntaje . ' - ' . $cant_S;
                }

                $ta = array($mayor,$cant_V,$cant_A,$cant_R,$cant_K,$cant_G,$cant_S);
                echo json_encode($ta);
                $this->_view->renderizar('index','registro');
                exit;
            }
            $this->_view->assign('datos', false);
        }
        $this->_view->renderizar('index','registro');
    }
    
    public function activar($id, $codigo){
        if(!$this->filtrarInt($id) || !$this->filtrarInt($codigo)){
            $this->_view->assign('_error', 'Esta cuenta no existe');
            $this->_view->renderizar('index','registro');
            exit;
        }
        
        $row = $this->_registro->getUsuario($this->filtrarInt($id),$this->filtrarInt($codigo));
        
        if(!$row){
            $this->_view->assign('_error', 'Esta cuenta no existe');
            $this->_view->renderizar('index','registro');
            exit;
        }
        
        if($row['estado'] == 1){
            $this->_view->assign('_error', 'Esta cuenta ya ha sido activada');
            $this->_view->renderizar('index','registro');
            exit;
        }
        
        $this->_registro->activarUsuario($this->filtrarInt($id),$this->filtrarInt($codigo));
        
        $row = $this->_registro->getUsuario($this->filtrarInt($id),$this->filtrarInt($codigo));
        
        if($row['estado'] == 0){
            $this->_view->assign('_error', 'Error al activar la cuenta, por favor intente mas tarde');
            $this->_view->renderizar('index','registro');
            exit;
        }
        
        $this->_view->assign('_mensaje', 'Su cuenta ha sido activada');
        $this->_view->renderizar('index','registro');
    }
}

?>

