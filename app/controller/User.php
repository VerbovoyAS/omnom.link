<?php 

class User extends Controller {
    
    public function index($user = '', $nav = 'main'){
        $list = $this->model('Listlink');

        if($user != ''){
            if(isset($_COOKIE['login']) != ''){
                if($user == $_COOKIE['login']){
                    $list->user = $_COOKIE['login'];
                    $forward = $list->allLink();
                    $this->view('user/index', $forward);
                }else{
                    $list->user = $_COOKIE['login'];
                    $forward = $list->getInfo();
                    $this->view('home/link', $forward);
                }
            }else{
                $this->view('user/auth');
            }
        }elseif(isset($_COOKIE['login']) != ''){
            $list->user = $_COOKIE['login'];
            $forward = $list->getInfo();
            $this->view('home/link', $forward);
            
        }else{
            $this->view('user/reg');
        }

    }
    public function auth(){
        $this->view('user/auth');
    }
    public function reg(){
        $this->view('user/reg');
    }
}