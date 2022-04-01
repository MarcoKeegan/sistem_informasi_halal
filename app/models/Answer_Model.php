<?php

class Answer_Model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAnswerByName($name,$category){
        $query = "SELECT id FROM answer_list WHERE name = '$name' AND categories = '$category'";
        $this->db->query($query);
        return $this->db->single();
    }
}