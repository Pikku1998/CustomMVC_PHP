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

        // Create PDO Instance
        $this->dbh = new PDO($dsn, $this->dbuser, $this->dbpassword);
        echo 'Database connected<br>';

    }
}