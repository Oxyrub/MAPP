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
        $user = $preparedStatement->fetchObject('User');
        $preparedStatement = null;
        return $user;       
    }   

    // Insert a user with inscription form (return false if no user is found)
    public function InsertUser($email, $dnaiss, $password, $username, $facebook)
    {
        $date = new DateTime();
        $datestr = $date->format('Y-m-d H:i:s');     
        
        $preparedStatement = $this->connect()->prepare("INSERT INTO utilisateur (`uti_email`, `uti_dnai`, `uti_password`,`uti_username`, `uti_dinsc`, `uti_dlastconnect`, `uti_acfacebook`) VALUES( ?, ?, ?, ?, ?, ?, ?)");
        $user = $preparedStatement->execute(array($email, $dnaiss, $password, $username, $datestr, $datestr, $facebook));
        $preparedStatement = null;
        return $user; 
    }

    // Delete a user by Id (return true if sucess & false if failed)
    public function DeleteUser($Id)
    {
        $preparedStatement = $this->connect()->prepare("DELETE FROM utilisateur WHERE uti_id = ?");
        $result = $preparedStatement->execute(array($Id));
        $preparedStatement = null;
        return $result;
    }

    // Update the last connection date field for a given Id (return true if sucess & false if failed)
    public function UpdateLastConnection($Id)
    {
        $date = new DateTime();
        $datestr = $date->format('Y-m-d H:i:s');

        $preparedStatement = $this->connect()->prepare("UPDATE utilisateur SET uti_dlastconnect = ? WHERE uti_id = ?");
        $result = $preparedStatement->execute(array($datestr, $Id));
        $preparedStatement = null;
        return $result;
    }

    // Update user information for a given Id (return true if sucess & false if failed)
    public function UpdateUser($email, $datenai, $password, $username,$Id)
    {
        $preparedStatement = $this->connect()->prepare("UPDATE utilisateur SET uti_email = ?, uti_dnai = ?, uti_password = ?, uti_username = ? WHERE uti_id = ?");
        $result = $preparedStatement->execute(array($email, $datenai, $password, $username,$Id));
        $preparedStatement = null;
        return $result;
    }
}