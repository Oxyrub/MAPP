<?php

namespace App\Model{

    class Db {
    
        private $host;
        private $user;
        private $pass;
        private $name;
        private $charset;
    
        function  __construct()
        {
            require './config.php';
            
            $this->host = $config['db']['host'];
            $this->user = $config['db']['user'];
            $this->pass = $config['db']['pass'];
            $this->name = $config['db']['dbname'];
            $this->charset = $config['db']['charset'];
        }
    
        function connect()
        {
            $mysql_connect_string = "mysql:host=$this->dbhost;dbname=$this->dbname;";
            $db_connection = new PDO($mysql_connect_string, $this->dbuser, $this->dbpass);
            $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh->exec("set names ".$this->charset);
            return $db_connection;
        }    
    }    
}

