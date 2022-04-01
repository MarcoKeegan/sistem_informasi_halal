<?php

class Assesment_Model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUserAssesment($id){
        $query = '
        SELECT A.id, A.name, A.company as company, A.assesment_date as date, AL1.grade as A1, AL2.grade as A2, AL3.grade as A3, AL4.grade as A4, AL5.grade as A5, AL6.grade as A6, AL7.grade as A7, AL8.grade as A8, AL9.grade as A9, AL0.grade as A0, A.final_result
        FROM assesment A
        LEFT JOIN answer_list_assesment AL1 ON (A.assesment1 = AL1.id)
        LEFT JOIN answer_list_assesment AL2 ON (A.assesment2 = AL2.id)
        LEFT JOIN answer_list_assesment AL3 ON (A.assesment3 = AL3.id)
        LEFT JOIN answer_list_assesment AL4 ON (A.assesment4 = AL4.id)
        LEFT JOIN answer_list_assesment AL5 ON (A.assesment5 = AL5.id)
        LEFT JOIN answer_list_assesment AL6 ON (A.assesment6 = AL6.id)
        LEFT JOIN answer_list_assesment AL7 ON (A.assesment7 = AL7.id)
        LEFT JOIN answer_list_assesment AL8 ON (A.assesment8 = AL8.id)
        LEFT JOIN answer_list_assesment AL9 ON (A.assesment9 = AL9.id)
        LEFT JOIN answer_list_assesment AL0 ON (A.assesment10 = AL0.id)
        WHERE A.user_id = '.$id.' 
        ORDER by 1 DESC';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getAssesmentGradeById($id){
        $query = '
        SELECT A.id, A.user_id, A.name, A.company as company, A.assesment_date as date, AL1.grade as A1, AL2.grade as A2, AL3.grade as A3, AL4.grade as A4, AL5.grade as A5, AL6.grade as A6, AL7.grade as A7, AL8.grade as A8, AL9.grade as A9, AL0.grade as A0
        FROM assesment A
        LEFT JOIN answer_list_assesment AL1 ON (A.assesment1 = AL1.id)
        LEFT JOIN answer_list_assesment AL2 ON (A.assesment2 = AL2.id)
        LEFT JOIN answer_list_assesment AL3 ON (A.assesment3 = AL3.id)
        LEFT JOIN answer_list_assesment AL4 ON (A.assesment4 = AL4.id)
        LEFT JOIN answer_list_assesment AL5 ON (A.assesment5 = AL5.id)
        LEFT JOIN answer_list_assesment AL6 ON (A.assesment6 = AL6.id)
        LEFT JOIN answer_list_assesment AL7 ON (A.assesment7 = AL7.id)
        LEFT JOIN answer_list_assesment AL8 ON (A.assesment8 = AL8.id)
        LEFT JOIN answer_list_assesment AL9 ON (A.assesment9 = AL9.id)
        LEFT JOIN answer_list_assesment AL0 ON (A.assesment10 = AL0.id)
        WHERE A.id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function getAssesmentById($id){
        $query = '
        SELECT *
        FROM assesment C
        WHERE C.id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function addAssesment($data){
        $query = "INSERT INTO assesment
                    VALUES 
                    ('', :name, :user_id, :company, null, null, null, null, null, null, null, null, null, null, :date, null)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('company', $data['company']);
        $this->db->bind('date', $data['date']);
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function countUserAssesment($id){
        $query = 'Select Count(*) as count FROM assesment Where user_id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function setAnswer1($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment1 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer2($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment2 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer3($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment3 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer4($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment4 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer5($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment5 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer6($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment6 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer7($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment7 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer8($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment8 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer9($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment9 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }
    public function setAnswer10($id, $answer_id){
        $query = "UPDATE assesment
            SET assesment10 = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
    
        return $this->db->rowCount();
    }

    public function setGrade($id, $grade){
        $query = "UPDATE assesment
            SET final_result = :grade
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('grade', $grade);
        $this->db->bind('id', $id);
        $this->db->execute();
    }
}