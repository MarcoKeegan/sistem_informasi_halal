<?php

class Auth extends Controller{


    public function index(){
        if(isset($_SESSION['login'])){
            header('Location: '. BASE_URL. '/Panel');
        }else{
            header('Location: '. BASE_URL. '/Auth/login');
        }
    }

    public function login(){
        if(empty($_POST)){
            if(isset($_SESSION['login'])){
                header('Location: '. BASE_URL. '/Panel');
            }else{
                $data['title'] = 'Login';
                $this->view('templates/header',$data);
                $this->view('auth/login',$data);
                $this->view('templates/footer');
            }
        }else{
            if(isset($_POST['login'])){
                if(!empty($_POST['email']) && !empty($_POST['password'])){
                    $data['user'] = $this->model('User_Model')->getUserLogin($_POST['email'], md5($_POST['password']));
                    if($data['user']){
                        $_SESSION['login'] = $data['user']['id'];
                        $_SESSION['role'] = $data['user']['role_id'];
                        header('Location: '. BASE_URL. '/Panel');
                        exit;
                    }else{
                        Flasher::setFlash('Wrong Email or Password!!!','danger');
                        header('Location: '. BASE_URL. '/Auth/login');
                        exit;
                    }
                }else{ 
                    Flasher::setFlash('Enter Email and Password!!!','danger');
                    header('Location: '. BASE_URL. '/Auth/login');
                    exit;
                }
            }
        }
    }

    public function register(){
        $data['role'] = $this->model('Role_Model')->getAllRole();
        if(empty($_POST)){
            $data['title'] = 'Register';
            $this->view('templates/header',$data);
            $this->view('auth/register',$data);
            $this->view('templates/footer');
        }else{
            if(isset($_POST['register'])){
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['role_id'])){
                    $data['name'] = $_POST['name'];
                    $data['email'] = $_POST['email'];
                    $data['password'] = md5($_POST['password']);
                    $data['role_id'] = $_POST['role_id'];
                    if($this->model('User_Model')->registerUser($data)){
                        header('Location: '. BASE_URL. '/Panel');
                        exit;
                    }else{
                        Flasher::setFlash('Email already in use','danger');
                        header('Location: '. BASE_URL. '/Auth/register');
                        exit;
                    }
                }else{ 
                    Flasher::setFlash('Please Fill In All Data!!!','danger');
                    header('Location: '. BASE_URL. '/Auth/register');
                    exit;
                }
            }
        }
    }

    public function logout(){
        session_destroy();
        header('Location: '. BASE_URL. '/Auth');
    }
}
