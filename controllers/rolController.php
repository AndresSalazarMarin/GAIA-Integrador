<?php
class rolController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        Session::set('tipo_v',  base64_decode($_GET['num']));
        $this->redireccionar(base64_decode($_GET['band']));
    }
}
?>

