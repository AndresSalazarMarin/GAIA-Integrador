<?php

class Database extends PDO{
    
    //nombre base de datos
    private $dbname = "RAIM";
    //nombre servidor
    private $host = "localhost";
    //nombre usuarios base de datos
    private $user = "postgres";
    //password usuario
    private $pass = "admin";
    //puerto postgreSql
    private $port = 5432;
    private $dbh;
    
    public function __construct($dbname,$host,$user,$pass,$port) {
        /*parent::__construct(
                'mysql:host='.DB_HOST.
                ';dbname='.$dbname,
                DB_USER,DB_PASS,
                array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.DB_CHAR
                    )
                );*/
        
        try {
 
            $this->dbh = parent::__construct("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$pass");

        } catch(PDOException $e) {
            $e->getMessage();
            return FALSE;
        }
    }
    
    //función para cerrar una conexión pdo
    public function close_con() 
    {

    $this->dbh = null; 

    }
    
}

?>