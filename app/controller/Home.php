<?php 
//Контроллер, главной страницы
class Home extends Controller {

    public function index(){
        
        
        if (isset($_COOKIE['login']) == ''){
            $this->view('home/index');
        }else{
            $list = $this->model('Listlink');
            $list->user = $_COOKIE['login'];
            $forward = $list->getInfo();
            $this->view('home/link', $forward);
        }
    }
    
    
}