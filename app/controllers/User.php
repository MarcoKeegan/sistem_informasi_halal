<?php

class User extends Controller{
    public function index(){
        $data['next_question'] = 1;
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }

}