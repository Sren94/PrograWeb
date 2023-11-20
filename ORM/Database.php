<?php

class Database{
    private $connection;
    public function __construct() {
       $options=[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
       ];
       $dns='mysql:host=localhost;dbname=noticiero';
       $user='root';
       $password='';

       $this->connection=new PDO($dns,$user,$password,$options);
       $this->connection->exec('SET CHARACTER SET UTF8');
    }
    public function verificarDriver()
    {
        $myArray=(PDO::getAvailableDrivers());
        $encontrado=false;
    foreach($myArray as $n)
    {
       if ($n=='mysql') 
       {
        $encontrado=true;
        break;
       } 
    }
    return $encontrado;
    }
    public function getConnection()
    {
        $options=[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
           ];
           $dns='mysql:host=localhost;dbname=noticiero';
           $user='root';
           $password='';
    
           $this->connection=new PDO($dns,$user,$password,$options);
           $this->connection->exec('SET CHARACTER SET UTF8'); 
           return $this->connection;

    }
}
