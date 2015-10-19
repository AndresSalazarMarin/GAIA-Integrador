<?php

class Model{
    
    protected $_db;
    protected $_dbFroac;
    protected $_newDB;


    public function __construct(){
        $this->_db = new Database('RAIM','localhost','postgres','admin',5432);
    }
    
}

?>

