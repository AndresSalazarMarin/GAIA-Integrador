<?php

require_once ROOT.'libs'.DS.'smarty'.DS.'libs'.DS.'Smarty.class.php';

class View extends Smarty{
    
    private $_controlador;
    private $_js;
    private $_acl;
    private $_usuario;
    
    public function __construct(Request $peticion, Acl $_acl) {
        parent::__construct();
        $this->_controlador = $peticion->getControlador();
        $this->_js = array();
        $this->_acl = $_acl;       
    }
    
    public function renderizar($vista, $item = false, $tipo_v = false){
        $this->template_dir = ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS;
        $this->config_dir = ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'configs'.DS;
        //$this->cache_dir = ROOT.'tmp'.DS.'cache'.DS;
        //$this->compile_dir = ROOT.'tmp'.DS.'template'.DS;
        if($tipo_v == 1){
                $menu[] = array(
                'id' => 'index',
                'titulo' => 'Administrador',
                'enlace' => BASE_URL
            );
        }
        $menu[] = array(
            'id' => 'index',
            'titulo' => 'Inicio',
            'enlace' => BASE_URL
        );
        $menu[] = array(
            'id' => 'aplicaciones',
            'titulo' => 'Aplicaciones',
            'enlace' => BASE_URL.'aplicaciones/'
        );
        
        if(Session::get('autenticado')){
            $permisos = $this->_acl->getRolUsuario(Session::get('usuario'));
            foreach($permisos as $i=>$key){
                if($key['ur_rol'] == 1){
                    $menu[] = array(
                        'id' => 'usuarios',
                        'titulo' => 'Administración de Usuarios',
                        'enlace' => BASE_URL.'usuarios/'
                    );
                }
            }
        }
        
        $js = array();
        
        if(count($this->_js)){
            $js = $this->_js;
        }
        
        $_params = array(
            'ruta_css' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/css/',
            'ruta_img' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/img/',
            'ruta_js' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/js/',
            'menu' => $menu,
            'item' => $item,
            'js' => $js,
            'root' => BASE_URL,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
            ),
            'otro'=>$tipo_v
        );
        
        $rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.tpl';
        
        if(is_readable($rutaView)){
            $this->assign('_contenido',$rutaView);
            /*include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'header.php';
            include_once $rutaView;
            include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'footer.php';*/
        }
        else{
            throw new Exception("Error Vista");
        }
        
        $this->assign('_acl',$this->_acl);
        $this->assign('_layoutParams',$_params);
        $this->display('template.tpl');
    }
    
    public function setJs(array $js) {
        if(is_array($js) && count($js)){
            for($i=0; $i<count($js);$i++){
                $this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
            }
        }else{
            throw new Exception('Erros de JS');
        }
    }
    
}

?>