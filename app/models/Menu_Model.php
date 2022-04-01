<?php

class Menu_Model{
    private $table = 'menu';
    private $table_initial = 'M';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUserMenu($id){
        $query = '
        SELECT *
        FROM menu M
        WHERE user_id = '.$id;
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getMenuByID($menu_id,$user_id){
        $query = '
        SELECT *
        FROM menu M
        WHERE user_id = '.$user_id.' and id = '.$menu_id;
        $this->db->query($query);
        return $this->db->single();
    }

    public function getMenuIngredient($id){
        $query = '
        SELECT I.id, I.name, CS.name as state, CS.notes as notes, CS2.name as state_store, CS2.notes as notes_store
        FROM ingredient I
        LEFT JOIN menu_ingredient MI ON (Mi.ingredient_id = I.id)
        LEFT JOIN menu M ON (M.id = Mi.menu_id)
        LEFT JOIN answer_list AL ON (I.answer_id = AL.id)
        LEFT JOIN cp_state CS ON (AL.cp_state_id = CS.id)
        LEFT JOIN answer_list AL2 ON (I.answer_id_store = AL2.id)
        LEFT JOIN cp_state CS2 ON (AL2.cp_state_id = CS2.id)
        WHERE M.id = '.$id.' 
        ';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getMenuCriticalIngredient($id){
        $query = '
        SELECT I.*
        FROM ingredient I
        LEFT JOIN menu_ingredient MI ON (Mi.ingredient_id = I.id)
        LEFT JOIN menu M ON (M.id = Mi.menu_id)
        LEFT JOIN answer_list AL ON (I.answer_id = AL.id)
        LEFT JOIN cp_state CS ON (AL.cp_state_id = CS.id)
        LEFT JOIN answer_list AL2 ON (I.answer_id_store = AL2.id)
        LEFT JOIN cp_state CS2 ON (AL2.cp_state_id = CS2.id)
        WHERE M.id = '.$id.' AND (CS.name = \'Titik Kritis\' OR CS2.name = \'Titik Kritis\')';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function addMenu($data){
        $query = "INSERT INTO menu
                    VALUES 
                    ('', :name, :user_id)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->execute();        
        
        return $this->db->rowCount();
    }
    
    public function addMenu_ingredient($data){
        $query = "INSERT INTO menu_ingredient
                    VALUES 
                    (:menu_id, :ingredient_id)";

        $this->db->query($query);
        $this->db->bind('menu_id', $data['menu_id']);
        $this->db->bind('ingredient_id', $data['ingredient_id']);
        $this->db->execute();        
        return $this->db->rowCount();
    }
}