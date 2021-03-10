
<?php 
// МОДЕЛЬ Вывода списка ссылок по пользователю
// Возвращает результат, ссылка на которую будет переадресация в /views/link/index.php
    class Profile  {
        public $user;
        public $nav;
        private $_db = null;
            public function __construct() {
                $this->_db = DB::getInstanse();
            }

            public function profile(){
                if($this->user != ''){
                    $result = $this->_db->query("SELECT * FROM `link` WHERE login = '$this->user'  ORDER BY `id` DESC");
                    $res = $result->fetchAll(PDO::FETCH_OBJ);
                    $linkBlock = '';
                    foreach ($res as $link){
                        
                        $linkBlock .=  "
                            
                            <tr>
                                <td><a href='$link->link'>$link->link</a></td>   
                                <td><a href='/s/$link->mylink'>https://omnom.link/s/$link->mylink</a></td>
                                <td><a href='#' class='del btn btn-sm btn-outline-primary ' >Копировать</a></td>
                                <td><a href='/?action=delete&id={$link->id}' class='del btn btn-sm btn-primary ' onclick='return confirm(\"Вы дейстиветельно хотите удалить - $link->mylink\")'>Удалить</a></td>
                            </tr>
                            ";
                    }
                    return $linkBlock;
                }   
            }

    }

