<?php

class Role_Model{
    private $table = 'role';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllRole(){
        $this->db->query('SELECT * FROM '.$this->table.' LIMIT 100 OFFSET 1 ');
        return $this->db->resultSet();
    }
}