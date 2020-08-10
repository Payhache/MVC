<?php

class DbManager{

    protected $bddConnection;
    private $host = 'localhost';
    private $dbName = 'blog';
    private $username = 'root';
    private $password = '';

    public function __construct()
    {

        try {
            $this->bddConnection = new PDO('mysql:host='.$this->host.'; dbname='.  $this->dbName . ';charset=utf8', $this->username, $this->password);
            $this->bddConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e) {
            die('Erreur '.$e->getMessage());
        }
    }
}
