<?php

class Distribution_Model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUserDistribution($id){
        $query = '
        SELECT D.id, D.name, D.distribution_date as date, CS.name as state, CS.notes as notes
        FROM distribution D
        LEFT JOIN answer_list AL ON (D.answer_id = AL.id)
        LEFT JOIN cp_state CS ON (AL.cp_state_id = CS.id)
        WHERE D.user_id = '.$id.' 
        ORDER by 1 DESC';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function addDistribution($data){
        $query = "INSERT INTO distribution
                    VALUES 
                    ('', :name, :user_id, null, :date)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('date', $data['date']);
        $this->db->execute();        
        
        return $this->db->rowCount();
    }

    public function countUserDistribution($id){
        $query = 'Select Count(*) as count FROM distribution Where user_id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    
    public function getDistributionById($id){
        $query = '
        SELECT *
        FROM distribution D
        WHERE D.id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function setAnswer($id, $answer_id){
        $query = "UPDATE distribution
            SET answer_id = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
        
        return $this->db->rowCount();
    }
}