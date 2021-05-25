<?php 
    // Регистрация пользователя
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $pass1 = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

    
    if(strlen($username) <= 1)
        $error = 'Введите имя';
    else if(strlen($email) <= 3)
        $error = 'Введите email';
    else if(strlen($login) <= 3)
        $error = 'Введите логин';
    else if(strlen($pass1) <= 3)
        $error = 'Введите Пароль';
    
    

    require_once '../app/lib/hash.php';
    $pass = md5($pass1 . $hash);
    
    require_once '../app/lib/DB.php';
    
    $_db = DB::getInstanse();
    // Проверка на свободное имя пользователя и E-mail
    $sql = 'SELECT login, email FROM `users`';
    $query = $_db->prepare($sql);
    $query->execute();
    $check = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($check as $ml){
        if($ml->email == $email){
            $error = 'Пользователь с таким E-mail уже существует'; 
        }
    }
    foreach($check as $log){
        if($log->login == $login){
            $error = 'Пользователь с таким именем уже существует';
        }
    }
    
    if($error != '') {
        echo $error;
        exit();
    }
    // Регистрация нового пользователя
    $sql = 'INSERT INTO `users` (`name`, `login`, `email`, `pass`) VALUES(?, ?, ?, ?)';
    $query = $_db->prepare($sql);
    $query->execute([$username, $login, $email, $pass]);

    setcookie('login', $login, time() + 3600 * 24 * 30, '/'); 
    echo 'Готово';
    
?>
