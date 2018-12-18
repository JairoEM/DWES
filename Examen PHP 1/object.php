<?php
    class Conexion extends PDO{
        public $db;
    
        public function __construct($dbhost = 'localhost', $dbname = 'librovisitas', $dbuser = 'root', $dbpass = '') {
          $db = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpass);
        } 
  
        public function insert($statement) {
            $db->beginTransaction();
        
            $status = $db->exec($statement);
            if ($status) {
                $db->commit();  
            } else {
                $db->rollback();
            }
        }     
    }
?>