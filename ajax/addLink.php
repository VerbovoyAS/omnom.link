<?php 
    // Добавление ссылки в БД

    $login_add = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $link_add = trim(filter_var($_POST['link'], FILTER_SANITIZE_STRING));
    $mylink_add = trim(filter_var($_POST['mylink'], FILTER_SANITIZE_STRING));
    
    // Проверка данных на длину
    if(strlen($link_add) < 3)
        $error = 'Ссылка слишком короткая, не менее 3 символов';
    else if(strlen($mylink_add) <= 1)
        $error = 'Введите не менее 2 символов';
  
    require_once '../app/lib/DB.php';
    
    $_db = DB::getInstanse();
    
    // // Проверка на свободную ссылку
    
    $sql = 'SELECT mylink FROM `link`';
    $query = $_db->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($data as $link){
        if($link->mylink == $mylink_add){
            $error = 'Такая ссылка уже занята';
            
        }
    }
    // Вывод ошибок если они есть
    if(isset($error) != '') {
        echo $error;
        exit();
    }

    // Получаем число ссылок которые уже сократили
    $sql = 'SELECT all_get_link FROM `all_stat` WHERE id = 1';
    $query = $_db->prepare($sql);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC); 
    // Прибавляем к числу 1
    $l = ++$data[0]['all_get_link'];
    //Обновляем кол-во ссылок в БД
    $sql = "UPDATE `all_stat` SET `all_get_link` = '{$l}' WHERE `all_stat`.`id` = 1";
    $query = $_db->prepare($sql);
    $query->execute();
    
    // Добавляем новую сокращенную ссылку в БД
    $sql = 'INSERT INTO `link` (`login`, `link`, `mylink`) VALUES(?, ?, ?)';
    $query = $_db->prepare($sql);
    $query->execute([$login_add, $link_add, $mylink_add]);
    
    echo 'Готово';
  