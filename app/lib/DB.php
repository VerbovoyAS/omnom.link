<?php 
    // Подключение к базе данных
class DB {
    private static $_db = null;

    public static function getInstanse(){

        require_once 'mysql.php';

        if(self::$_db == null)
            self::$_db = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=UTF8', $db_user, $db_pass);
            
        return self::$_db;
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}
