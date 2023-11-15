<?php
class Post{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUsers(){
        $sqlQuery = 'SELECT * FROM users';
        $this->db->query($sqlQuery);
        return $this->db->resultSet();
    }
    
    
}