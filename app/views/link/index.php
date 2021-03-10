<?php
$_db = DB::getInstanse();
// Получаем число переходов которые уже сделали
$sql = 'SELECT all_jump_link FROM `all_stat` WHERE id = 1';
$query = $_db->prepare($sql);
$query->execute();
$dataStat = $query->fetchAll(PDO::FETCH_ASSOC); 
// Прибавляем к числу 1
$jump = ++$dataStat[0]['all_jump_link'];
//Обновляем кол-во переходов в БД
$sql = "UPDATE `all_stat` SET `all_jump_link` = '{$jump}' WHERE `all_stat`.`id` = 1";
$query = $_db->prepare($sql);
$query->execute();
?>

<!-- REDIRECT -->
<?php
$l = $data;
?>
<meta http-equiv="refresh" content="0;<?=$l?>"> 