<?php

class Question extends Controller{
    public function index(){
        header('Location: '. BASE_URL. '/Panel');
    }

    public function cutting($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 2){
            $data['cutting'] = $this->model('Cutting_Model')->getCuttingById($id);
                if($data['cutting']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        //32 start dari pertanyaan cutting di DB
                        $_SESSION['question_id'] = 32;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Critical Point Identification';
                        $data['id'] = $id;
                        $data['model'] = 'cutting';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Model')->getAnswerByName($_SESSION['answer_list'],'Cutting');
                        $this->model('Cutting_Model')->setAnswer($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        header('Location: '. BASE_URL. '/Panel/cutting');
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/cutting');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/cutting');
        }
    }

    public function distribution($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 3){
            $data['distribution'] = $this->model('Distribution_Model')->getDistributionById($id);
                if($data['distribution']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        //23 start dari pertanyaan distribution di DB
                        $_SESSION['question_id'] = 23;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Critical Point Identification';
                        $data['id'] = $id;
                        $data['model'] = 'distribution';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Model')->getAnswerByName($_SESSION['answer_list'],'Distribution');
                        $this->model('Distribution_Model')->setAnswer($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        header('Location: '. BASE_URL. '/Panel/distribution');
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/distribution');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/distribution');
        }
    }


    public function ingredient($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 4){
                $data['ingredient'] = $this->model('Ingredient_Model')->getIngredientById($id);
                if($data['ingredient']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        //1 start dari pertanyaan ingredient di DB
                        $_SESSION['question_id'] = 1;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Critical Point Identification';
                        $data['id'] = $id;
                        $data['model'] = 'ingredient';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Model')->getAnswerByName($_SESSION['answer_list'],'Ingredient');
                        $this->model('Ingredient_Model')->setAnswer($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        header('Location: '. BASE_URL. '/Panel/ingredient');
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/ingredient');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/ingredient');
        }
    }

    public function ingredient_store($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 4){
                $data['ingredient'] = $this->model('Ingredient_Model')->getIngredientById($id);
                if($data['ingredient']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        //17 start dari pertanyaan ingredient di DB
                        $_SESSION['question_id'] = 17;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Critical Point Identification';
                        $data['id'] = $id;
                        $data['model'] = 'ingredient_store';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Model')->getAnswerByName($_SESSION['answer_list'],'Storage');
                        $this->model('Ingredient_Model')->setAnswerStore($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        header('Location: '. BASE_URL. '/Panel/ingredient');
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/ingredient');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/ingredient');
        }
    }

    public function display($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 4){
            $data['display'] = $this->model('Display_Model')->getDisplayById($id);
                if($data['display']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        //23 start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 28;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Critical Point Identification';
                        $data['id'] = $id;
                        $data['model'] = 'display';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Model')->getAnswerByName($_SESSION['answer_list'],'Display');
                        $this->model('Display_Model')->setAnswer($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        header('Location: '. BASE_URL. '/Panel/display');
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/display');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/display');
        }
    }

    public function assesment1($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 38;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment1';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment1');
                        $this->model('Assesment_Model')->setAnswer1($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment9'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment2($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 44;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment2';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment2');
                        $this->model('Assesment_Model')->setAnswer2($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment9'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment3($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 51;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment3';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment3');
                        $this->model('Assesment_Model')->setAnswer3($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment9'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment4($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 57;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment4';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment4');
                        $this->model('Assesment_Model')->setAnswer4($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment9'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment5($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 60;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment5';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment5');
                        $this->model('Assesment_Model')->setAnswer5($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment9'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment6($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 68;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment6';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment6');
                        $this->model('Assesment_Model')->setAnswer6($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment9'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment7($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 72;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment7';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment7');
                        $this->model('Assesment_Model')->setAnswer7($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment9'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment8($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 74;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment8';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment8');
                        $this->model('Assesment_Model')->setAnswer8($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment9'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment9($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 76;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment9';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment9');
                        $this->model('Assesment_Model')->setAnswer9($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment10'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

    public function assesment10($id = False){
        if($id){
            if($_SESSION['role'] == 1 || $_SESSION['role'] == 5){
                $data['assesment'] = $this->model('Assesment_Model')->getAssesmentById($id);
                if($data['assesment']['user_id'] == $_SESSION['login']){
                    if(isset($_POST['answer'])){
                        $_SESSION['question_id'] =  $this->model('Question_Model')->getIdByAnswer($_SESSION['question_id'], $_POST['answer'])['id'];
                        $_SESSION['answer_list'] .= $_POST['answer'];
                    }else{
                        // start dari pertanyaan display di DB
                        $_SESSION['question_id'] = 78;
                        $_SESSION['answer_list'] = '';
                    }
                    if($_SESSION['question_id'] != 0){
                        $data['question'] = $this->model('Question_Model')->getQuestionById($_SESSION['question_id']);
                        $data['user'] = $this->model('User_Model')->getUserData($_SESSION['login']);
                        $data['title'] = 'Assesment';
                        $data['id'] = $id;
                        $data['model'] = 'assesment10';
                        $this->view('templates/header',$data);
                        $this->view('templates/navbar',$data);
                        $this->view('templates/sidebar',$data);
                        $this->view('panel/question',$data);
                        $this->view('templates/sidebar_end',$data);
                        $this->view('templates/footer');
                    }else{
                        $answer = $this->model('Answer_Assesment_Model')->getAnswerByName($_SESSION['answer_list'],'Assesment10');
                        $this->model('Assesment_Model')->setAnswer10($id,$answer['id']);
                        unset($_SESSION['answer_list']);
                        unset($_SESSION['question_id']);
                        if(
                            isset($data['assesment']['assesment1'])&&
                            isset($data['assesment']['assesment2'])&&
                            isset($data['assesment']['assesment3'])&&
                            isset($data['assesment']['assesment4'])&&
                            isset($data['assesment']['assesment5'])&&
                            isset($data['assesment']['assesment6'])&&
                            isset($data['assesment']['assesment7'])&&
                            isset($data['assesment']['assesment8'])&&
                            isset($data['assesment']['assesment9'])){
                            header('Location: '. BASE_URL. '/Panel/grade_assesment/' . $id);
                        }
                        else{
                            header('Location: '. BASE_URL. '/Panel/assesment');
                        }
                    }
                }else{
                    header('Location: '. BASE_URL. '/Panel/assesment');
                }
            }else{
                header('Location: '. BASE_URL. '/Panel');
            }
        }else{
            header('Location: '. BASE_URL. '/Panel/assesment');
        }
    }

}