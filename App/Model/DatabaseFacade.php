<?php

include_once('User.php');

class DatabaseFacade {

    private $host;
    private $user;
    private $pass;
    private $name;
    private $port;
    private $charset;

    function  __construct()
    {
        require '../Model/config.php';
        
        $this->host = $config['db']['host'];
        $this->user = $config['db']['user'];
        $this->pass = $config['db']['pass'];
        $this->name = $config['db']['dbname'];
        $this->port = $config['db']['port'];
        $this->charset = $config['db']['charset'];
    }

    private function connect()
    {
        $mysql_connect_string = "mysql:host=$this->host;port=$this->port;dbname=$this->name;";
        $db_connection = new PDO($mysql_connect_string, $this->user, $this->pass);
        $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db_connection->exec("set names ".$this->charset);
        return $db_connection;
    }

    // Get a user for a given username and password (return false if no user is found)
    public function GetUser($username, $password)
    {            
        $preparedStatement = $this->connect()->prepare('SELECT * FROM utilisateur WHERE uti_username = ? AND uti_password = ?');
        $preparedStatement->execute(array($username, $password));   
        $result = $preparedStatement->fetchObject('User');
        $preparedStatement = null;
        return $result;       
    }
}    


