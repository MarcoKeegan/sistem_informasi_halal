<?php

class Cutting_Model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUserCutting($id){
        $query = '
        SELECT C.id, C.name, C.cut_date as date, CS.name as state, CS.notes as notes
        FROM cutting C
        LEFT JOIN answer_list AL ON (C.answer_id = AL.id)
        LEFT JOIN cp_state CS ON (AL.cp_state_id = CS.id)
        WHERE C.user_id = '.$id.' 
        ORDER by 1 DESC';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getCuttingById($id){
        $query = '
        SELECT *
        FROM cutting C
        WHERE C.id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function addCutting($data){
        $query = "INSERT INTO cutting
                    VALUES 
                    ('', :name, :user_id, null, :date)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('date', $data['date']);
        $this->db->execute();        
        
        return $this->db->rowCount();
    }

    public function countUserCutting($id){
        $query = 'Select Count(*) as count FROM cutting Where user_id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function setAnswer($id, $answer_id){
        $query = "UPDATE cutting
            SET answer_id = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
}