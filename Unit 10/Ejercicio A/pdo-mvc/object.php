<?php
    class conexion{
        private $servername = "";
        private $database = ""; 
        private $username = "";
        private $password = "";
    }

    public function __construct($servername, $database, $username, $password){
        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    public function getServername(){
        return $this->servername;
    }

    public function getDatabase(){
        return $this->database;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }


    private $type = "mysql";
    private $host = "localhost";
    private $nombre_de_base = "librovisitas";
    private $usuario = "root";
    private $contrasena = "";
    public function __contructor(){
        try{
            $con = new PDO($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);
        }catch(PDOException $e){
            echo "Fallo conexion BD";
            exit();
        }
    }
}
?>