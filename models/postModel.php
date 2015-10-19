<?php

class postModel extends Model{
    public function __construct() {
        parent::__construct();       
    }
    
    public function getPosts(){ //Devuelve todos los post
        $post = $this->_db->query("select * from posts");
        return $post->fetchall();
    }
    
    public function getPost($id) {//Devuelve el posts solicitado
        $id = (int) $id;
        $post = $this->_db->query("select * from posts where id=$id");
        return $post->fetch();
    }
    
    public function insertarPost($titulo,$cuerpo,$imagen) {
        $this->_db->prepare('insert into posts values (null,:titulo,:cuerpo,:imagen)')
                ->execute(
                        array(
                            ':titulo' => $titulo,
                            ':cuerpo' => $cuerpo,
                            ':imagen' => $imagen
                        )
                        );
    }
    
    public function editarPost($id, $titulo, $cuerpo) {
        $id = (int) $id;
        
        $this->_db->prepare('update posts set titulo = :titulo, cuerpo = :cuerpo where id = :id')
                ->execute(
                        array(
                            ':id' => $id,
                            ':titulo' => $titulo,
                            ':cuerpo' => $cuerpo
                        ));
    }
    
    public function eliminarPost($id) {
        $id = (int) $id;
        $this->_db->query("delete from posts where id=$id");
    }
}

?>

