<?php 
    // Авторизация с проверкой правильности пароля

    $login1 = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $pass1 = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));
  
    if(strlen($login1) <= 3)
       $error = 'Введите логин, не менее 3 сисмволов';
    else if(strlen($pass1) <= 3)
        $error = 'Введите Пароль, не менее 3 символов';
    
    if(isset($error) != '') {
        echo $error;
        exit();
    }
    
    require_once '../app/lib/hash.php';
    $pass = md5($pass1 . $hash);
    
    require_once '../app/lib/DB.php';
    
    $_db = DB::getInstanse();
    
    
    
    $sql = 'SELECT * FROM `users` WHERE `login` = :login && `pass` = :pass';
    $query = $_db->prepare($sql);
    $query->execute(['login' => $login1, 'pass' => $pass]);
    $user = $query->fetch(PDO::FETCH_OBJ);

    if($user->pass != $pass || $user->login != $login1 )
        echo "Логин или пароль не верные!";
    else {
        setcookie('login', $login1, time() + 3600 * 24 * 30, '/'); 
        echo 'Готово';
    }

    
?>