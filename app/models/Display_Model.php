<?php

class Display_Model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUserDisplay($id){
        $query = '
        SELECT D.id, D.name, D.display_date as date, m.name as menu, CS.name as state, CS.notes as notes
        FROM display D
        LEFT JOIN answer_list AL ON (D.answer_id = AL.id)
        LEFT JOIN cp_state CS ON (AL.cp_state_id = CS.id)
        LEFT JOIN menu M ON (D.menu_id = M.id)
        WHERE D.user_id = '.$id.' 
        ORDER by 1 DESC';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function addDisplay($data){
        $query = "INSERT INTO display
                    VALUES 
                    ('', :name, :user_id, :menu_id, null, :date)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('menu_id', $data['menu_id']);
        $this->db->bind('date', $data['date']);
        $this->db->execute();        
        
        return $this->db->rowCount();
    }

    public function countUserDisplay($id){
        $query = 'Select Count(*) as count FROM display Where user_id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function getDisplayById($id){
        $query = '
        SELECT *
        FROM display D
        WHERE D.id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function setAnswer($id, $answer_id){
        $query = "UPDATE display
            SET answer_id = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
        
        return $this->db->rowCount();
    }
}