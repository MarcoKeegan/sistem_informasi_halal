<?php

class Question_Model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllQuestion(){
        $this->db->query('SELECT * FROM question_list');
        return $this->db->resultSet();
    }

    public function getQuestionById($id){
        $query = 'SELECT * FROM question_list WHERE id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function getIdByAnswer($id,$answer){
        $query = 'SELECT next_question_'.$answer.' as id FROM question_list WHERE id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }
}