<?php 

Class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database_name = 'person';
    public $conn;


    
    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database_name);

        if($this->conn->connect_error){
            echo "connection error";
        }else{
            return $this->conn;
        }
    }
}

?>