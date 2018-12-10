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
?>