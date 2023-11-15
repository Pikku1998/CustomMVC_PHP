<?php
class Database{
    private $host = DB_HOST;
    private $dbuser = DB_USER;
    private $dbpassword = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;

    public function __construct()
    {
        //set DSN
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT=>true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // Create PDO Instance
        try{
            $this->dbh = new PDO($dsn, $this->dbuser, $this->dbpassword, $options);
            echo 'Database connected<br>';
        }
        catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }

    }
}