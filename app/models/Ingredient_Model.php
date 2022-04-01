<?php

class Ingredient_Model{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUserIngredient($id){
        $query = '
        SELECT I.id, I.name, CS.name as state, CS.notes as notes, CS2.name as state_store, CS2.notes as notes_store
        FROM ingredient I
        LEFT JOIN answer_list AL ON (I.answer_id = AL.id)
        LEFT JOIN cp_state CS ON (AL.cp_state_id = CS.id)
        LEFT JOIN answer_list AL2 ON (I.answer_id_store = AL2.id)
        LEFT JOIN cp_state CS2 ON (AL2.cp_state_id = CS2.id)
        WHERE I.user_id = '.$id.' 
        ORDER by 1 DESC';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function addIngredient($data){
        $query = "INSERT INTO ingredient
                    VALUES 
                    ('', :name, :user_id, null, null)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->execute();        
        
        return $this->db->rowCount();
    }

    public function getUnusedIngredient($menu_id,$user_id){
        $query = '
        WITH used_ingredient as (
            SELECT I.id 
            FROM ingredient I
            LEFT JOIN menu_ingredient MI ON (Mi.ingredient_id = I.id) 
            LEFT JOIN menu M ON (M.id = Mi.menu_id) 
            WHERE M.id = '.$menu_id.'
        )
        SELECT 
            I.id, I.name
            FROM ingredient I
            WHERE I.user_id = '.$user_id.' AND I.id NOT IN (SELECT id from used_ingredient) AND I.answer_id IS NOT NULL AND I.answer_id_store IS NOT NULL';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function countUserIngredient($id){
        $query = 'Select Count(*) as count FROM ingredient Where user_id = '.$id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function getIngredientById($id){
        $query = '
        SELECT *
        FROM ingredient I
        WHERE I.id = '.$id;        
        $this->db->query($query);
        return $this->db->single();
    }

    public function setAnswer($id, $answer_id){
        $query = "UPDATE ingredient
            SET answer_id = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();        
        
        return $this->db->rowCount();
    }

    public function setAnswerStore($id, $answer_id){
        $query = "UPDATE ingredient
            SET answer_id_store = :answer_id
            WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->bind('id', $id);
        $this->db->execute();      
        
        return $this->db->rowCount();
    }
}