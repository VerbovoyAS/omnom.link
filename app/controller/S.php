<?php 
    //Контроллер, передает в views/link/index.php ссылку для переадресации
    class S extends Controller {
        public function index($link = 's'){
            if($link != ''){
                $mylink = $this->model('Link');
                $mylink->link = $link;
                $forward = $mylink->getInfo();
                $this->view('link/index', $forward);

            }
        }
}