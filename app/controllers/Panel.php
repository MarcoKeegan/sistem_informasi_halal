<?php

class Panel extends Controller{
    public function index(){
        if(isset($_SESSION['login'])){
            $data['title'] = 'Main Panel';
            $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
            $this->view('templates/header',$data);
            $this->view('templates/navbar',$data);
            $this->view('panel/index',$data);
            $this->view('templates/sidebar',$data);
            $this->view('templates/sidebar_end',$data);
            $this->view('templates/footer');
        }else{
            header('Location: '. BASE_URL. '/Auth');
        }
    }

    public function cutting(){
        if($_SESSION['role'] == 1 || $_SESSION['role'] == 2){
            $data['title'] = 'Cutting Panel';
            $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
            $data['cutting'] = $this->model('Cutting_Model')->getUserCutting($_SESSION['login']);
            $this->view('templates/header',$data);
            $this->view('templates/navbar',$data);
            $this->view('templates/sidebar',$data);
            $this->view('panel/cutting',$data);
            $this->view('templates/sidebar_end',$data);
            $this->view('templates/footer');
        }else{
            header('Location: '. BASE_URL. '/Panel');
        }
    }

    public function distribution(){
        if($_SESSION['role'] == 1 || $_SESSION['role'] == 3){
            $data['title'] = 'Distribution Panel';
            $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
            $data['distribution'] = $this->model('Distribution_Model')->getUserDistribution($_SESSION['login']);
            $this->view('templates/header',$data);
            $this->view('templates/navbar',$data);
            $this->view('templates/sidebar',$data);
            $this->view('panel/distribution',$data);
            $this->view('templates/sidebar_end',$data);
            $this->view('templates/footer');
        }else{
            header('Location: '. BASE_URL. '/Panel');
        }
    }

    public function menu($id = False){
        if($_SESSION['role'] == 1 || $_SESSION['role'] == 4){
            if(!$id){
                $data['title'] = 'Menu Panel';
                $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                $data['menu'] = $this->model('Menu_Model')->getUserMenu($_SESSION['login']);
                foreach($data['menu'] as $index=>$menu){
                    $data['menu'][$index]['ingredient'] = $this->model('Menu_Model')->getMenuCriticalIngredient($menu['id']);
                }
                $this->view('templates/header',$data);
                $this->view('templates/navbar',$data);
                $this->view('templates/sidebar',$data);
                $this->view('panel/menu',$data);
                $this->view('templates/sidebar_end',$data);
                $this->view('templates/footer');
            }else{
                $data['menu'] = $this->model('Menu_Model')->getMenuByID($id,$_SESSION['login']);
                if(!empty($data['menu'])){
                    $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                    $data['ingredient'] = $this->model('Menu_Model')->getMenuIngredient($id);
                    $data['ingredient_list'] = $this->model('Ingredient_Model')->getUnusedIngredient($id,$_SESSION['login']);
                    $data['title'] = 'Menu '.$data['menu']['name'];
                    $this->view('templates/header',$data);
                    $this->view('templates/navbar',$data);
                    $this->view('templates/sidebar',$data);
                    $this->view('panel/menu_detail',$data);
                    $this->view('templates/sidebar_end',$data);
                    $this->view('templates/footer');
                }else{
                    header('Location: '. BASE_URL. '/Panel/menu');
                }
            }   
        }
        else{
            header('Location: '. BASE_URL. '/Panel');
        }
            
    }

    public function display(){
        if($_SESSION['role'] == 1 || $_SESSION['role'] == 4){
            $data['title'] = 'Display Panel';
            $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
            $data['display'] = $this->model('Display_Model')->getUserDisplay($_SESSION['login']);
            $data['menu'] = $this->model('Menu_Model')->getUserMenu($_SESSION['login']);
            $this->view('templates/header',$data);
            $this->view('templates/navbar',$data);
            $this->view('templates/sidebar',$data);
            $this->view('panel/display',$data);
            $this->view('templates/sidebar_end',$data);
            $this->view('templates/footer');
        }else{
            header('Location: '. BASE_URL. '/Panel');
        }
    }

    public function assesment(){
        if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
            $data['title'] = 'Assesment Panel';
            $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
            $data['assesment'] = $this->model('Assesment_Model')->getUserAssesment($_SESSION['login']);
            $this->view('templates/header',$data);
            $this->view('templates/navbar',$data);
            $this->view('templates/sidebar',$data);
            $this->view('panel/assesment',$data);
            $this->view('templates/sidebar_end',$data);
            $this->view('templates/footer');
        }else{
            header('Location: '. BASE_URL. '/Panel');
        }
    }

    public function ingredient(){
        $data['title'] = 'Ingredient Panel';
        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
        $data['ingredient'] = $this->model('Ingredient_Model')->getUserIngredient($_SESSION['login']);
        $this->view('templates/header',$data);
        $this->view('templates/navbar',$data);
        $this->view('templates/sidebar',$data);
        $this->view('panel/ingredient',$data);
        $this->view('templates/sidebar_end',$data);
        $this->view('templates/footer');
    }

    public function add($categories = False,$id = false){
        if(!$categories){
            header('Location: '. BASE_URL. '/Panel');
        }else{
            if(!empty($_POST)){
                if ($categories == 'assesment'){
                    $model = $categories.'_Model';
                    $method = 'add'.ucfirst($categories);
                    $methodCount = 'countUser'.ucfirst($categories);
                    $headers = '/Panel/'.$categories;
                    //generate name
                    $count = $this->model($model)->$methodCount($_SESSION['login']);
                    $count['count'] +=1;
                    $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                    $data['name'] = substr($data['user']['email'], 0, strpos($data['user']['email'], '@'));
                    $data['name'] .= $count['count'];
                    $data['date'] = date("Y-m-d");
                    $data['user_id'] = $_SESSION['login'];
                    $data['company'] = $_POST['company'];
                }
                else if($categories == 'menu_ingredient'){
                    $model = 'Menu_Model';
                    $method = 'add'.ucfirst($categories);
                    $data['menu_id'] = $id;
                    $data['ingredient_id'] = $_POST['ingredient_id'];
                    $headers = '/Panel/menu/'.$id;
                }else{
                    $model = $categories.'_Model';
                    $method = 'add'.ucfirst($categories);
                    $methodCount = 'countUser'.ucfirst($categories);
                    $headers = '/Panel/'.$categories;
                    //generate name
                    if(!empty($_POST['name'])){
                        $data['name'] = $_POST['name'];
                    }else{
                        $count = $this->model($model)->$methodCount($_SESSION['login']);
                        $count['count'] +=1;
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['name'] = substr($data['user']['email'], 0, strpos($data['user']['email'], '@'));
                        $data['name'] .= $count['count'];
                    }
                    //for display
                    if(!empty($_POST['menu_id'])){
                        $data['menu_id'] = $_POST['menu_id'];
                    }
                    $data['date'] = date("Y-m-d");
                    $data['user_id'] = $_SESSION['login'];
                }
                if($this->model($model)->$method($data)){
                    header('Location: '. BASE_URL. $headers);
                    exit;
                }else{
                    header('Location: '. BASE_URL. $headers);
                    exit;
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }
    }

    public function grade_assesment($id = False){
        if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
            if(!$id){
                header('Location: '. BASE_URL. '/Panel');
            }else{                
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentGradeById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if( isset($data['assesment']['A1'])&&isset($data['assesment']['A2'])&&isset($data['assesment']['A3'])&&isset($data['assesment']['A4'])&&
                        isset($data['assesment']['A5'])&&isset($data['assesment']['A6'])&&isset($data['assesment']['A7'])&&isset($data['assesment']['A8'])&&
                        isset($data['assesment']['A9'])&&isset($data['assesment']['A0'])){
                        $main_section = array($data['assesment']['A1'], $data['assesment']['A3'], $data['assesment']['A4'], $data['assesment']['A5'], $data['assesment']['A6']);
                        $sec_section = array($data['assesment']['A2'], $data['assesment']['A7'], $data['assesment']['A8'], $data['assesment']['A9'], $data['assesment']['A0']);
                        $main_count = array_count_values($main_section);
                        $sec_count = array_count_values($sec_section);
                        if (!isset($main_count['A'])) 
                            $main_count['A'] = 0;
                        if (!isset($main_count['B'])) 
                            $main_count['B'] = 0;
                        if (!isset($main_count['C'])) 
                            $main_count['C'] = 0;

                        if (!isset($sec_count['A'])) 
                            $sec_count['A'] = 0;
                        if (!isset($sec_count['B'])) 
                            $sec_count['B'] = 0;
                        if (!isset($sec_count['C'])) 
                            $sec_count['C'] = 0;

                        if($main_count['A'] == 5 && $sec_count['C'] <=2){   
                            $this->model('Assesment_Model')->setGrade($id,'A');
                        }else if($main_count['C'] == 0){
                            $this->model('Assesment_Model')->setGrade($id,'B');
                        }else{
                            $this->model('Assesment_Model')->setGrade($id,'C');
                        }
                        header('Location: '. BASE_URL. '/Panel/Assesment');
                    }else{
                        header('Location: '. BASE_URL. '/Panel/Assesment');
                    }
                }
                else{
                    header('Location: '. BASE_URL. '/Panel/Assesment');
                }
            }
        }else{
            header('Location: '. BASE_URL. '/Panel');
        }
    }

    public function main(){         //Punya Marco
        if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
            $data['title'] = 'Penilaian SJH';
            $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
            $data['assesment'] = $this->model('Assesment_Model')->getUserAssesment($_SESSION['login']);
            $this->view('templates/header',$data);
            $this->view('templates/navbar',$data);
            $this->view('templates/sidebar',$data);
            $this->view('panel/main',$data);
            $this->view('templates/sidebar_end',$data);
            $this->view('templates/footer');
        }else{
            header('Location: '. BASE_URL. '/Panel');
        }
    }
}