
<?php 
// МОДЕЛЬ Переадресации ссылки
// Возвращает результат, ссылка на которую будет переадресация в /views/link/index.php
    class Link  {
        public $link;
        private $_db = null;
            public function __construct() {
                $this->_db = DB::getInstanse();
            }
            public function getInfo(){
                if($this->link != ''){

                    $res_link = '';
                    // Проверяем есть ли в массиве ссылка которую запрашивает потльзователь
                    $result = $this->_db->query("SELECT * FROM `link` WHERE mylink = '$this->link'");
                    $res = $result->fetchAll(PDO::FETCH_ASSOC);
                    if($res != false){
                        $res_link =  $res[0]['link'];
                    }else{
                        $res_link =  "/";
                    }
                    return $res_link; 
                }   
            }
    }
