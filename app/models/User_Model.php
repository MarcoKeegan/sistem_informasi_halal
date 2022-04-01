<?php

class User_Model{
    private $table = 'users';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUserLogin($email, $password){
        $this->db->query('SELECT id, role_id FROM '.$this->table.' WHERE email = \''.$email.'\' and password = \''.$password .'\'');
        return $this->db->single();
    }

    public function getUserData($id){
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id = '.$id);
        return $this->db->single();
    }

    public function registerUser($data){
        $query = "INSERT INTO users
                    VALUES 
                    ('', :name, :email, :password, :role_id)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role_id', $data['role_id']);
        $this->db->execute();        

        return $this->db->rowCount();
    }

    
}