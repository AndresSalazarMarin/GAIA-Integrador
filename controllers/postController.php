<?php

class postController extends Controller{
    
    private $_post;
    
    public function __construct() {
        parent::__construct();
        $this->_post = $this->loadModel('post');
    }
    public function index($pagina = false){
        
        /*for($i=0; $i<300; $i++){ Inserte 600 post
            $model = $this->loadModel('post');
            $model->insertarPost('Titulo'.$i,'Cuerpo'.$i);
        }*/
        
     if (!$this->filtrarInt($pagina)) {
         $pagina = false;
     }else{
         $pagina = (int) $pagina;
     }
        
        $this->getLibrary('paginador');
        $paginador = new Paginador();
                
        $this->_view->assign('posts',$paginador->paginar($this->_post->getPosts(),$pagina));
        $this->_view->assign('paginacion', $paginador->getView('prueba','post/index'));
        $this->_view->assign('titulo', 'Post');
        $this->_view->renderizar('index','post');
    }
    public function nuevo() {
        
        $this->_acl->acceso("nuevo_post");
        
        $this->_view->assign('titulo', 'Nuevo Post');
        $this->_view->setJs(array('nuevo'));
        
        if($this->getInt('guardar') == 1){
            
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getTexto('titulo')){
                $this->_view->assign('_error', 'Debe introducir titulo');
                $this->_view->renderizar('nuevo','post');
                exit;
            }
            if(!$this->getTexto('cuerpo')){
                $this->_view->assign('_error', 'Debe introducir cuerpo');
                $this->_view->renderizar('nuevo','post');
                exit;
            }
            
            $imagen = '';
            
            if(isset($_FILES['imagen']['name'])){
                $this->getLibrary('upload'.DS.'class.upload');
                $ruta = ROOT.'public'.DS.'img'.DS.'post'.DS;
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
                    $this->_view->renderizar('nuevo','post');
                    exit;
                }
            }
            
            $this->_post->insertarPost(
                    $this->getPostParam('titulo'),
                    $this->getPostParam('cuerpo'),
                    $imagen
                    );
            $this->redireccionar('post');
        }
        
        $this->_view->renderizar('nuevo','post');
    }
    
    public function editar($id) {
        
        $this->_acl->acceso("editar_post");
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('post');
        }
        if(!$this->_post->getPost($this->filtrarInt($id))){
            $this->redireccionar('post');
        }
        
        $this->_view->assign('titulo', 'Editar Post');
        $this->_view->setJs(array('nuevo'));
        
        if($this->getInt('guardar') == 1){
            
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getTexto('titulo')){
                $this->_view->assign('_error', 'Debe introducir titulo');
                $this->_view->renderizar('editar','post');
                exit;
            }
            if(!$this->getTexto('cuerpo')){
                $this->_view->assign('_error', 'Debe introducir cuerpo');
                $this->_view->renderizar('editar','post');
                exit;
            }
            $this->_post->editarPost(
                    $this->filtrarInt($id),
                    $this->getTexto('titulo'),
                    $this->getTexto('cuerpo')
                    );
            $this->redireccionar('post');
        }else{
            $this->_view->assign('datos', $this->_post->getPost($this->filtrarInt($id)));
        }
        
        $this->_view->renderizar('editar','post');
    }
    
    public function eliminar($id) {
        Session::acceso('admin');
        if(!$this->filtrarInt($id)){
            $this->redireccionar('post');
        }
        if(!$this->_post->getPost($this->filtrarInt($id))){
            $this->redireccionar('post');
        }
        $this->_post->eliminarPost($this->filtrarInt($id));
        $this->redireccionar('post');
    }
    
}

?>

