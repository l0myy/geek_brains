<?php
include_once "model.php";

$goods = getAll($connect, 'goods');

if (isset($_POST['count_show']) || isset($_POST['count_add'])){
    var_dump('Hello');
	$goods = getAll($connect,'goods',$_POST['count_show'],$_POST['count_add']);
        echo json_encode($goods); // возвращаем данные ответом, преобразовав в JSON-строку
        exit; // останавливаем дальнейшее выполнение скрипта
        mysqli_close($connect);
}


if (isset($_POST['getAllGoods'])) {
	$goods = renderAllGoods($connect);
        echo json_encode($goods); // возвращаем данные ответом, преобразовав в JSON-строку
        exit; // останавливаем дальнейшее выполнение скрипта
        mysqli_close($connect);
}

?>