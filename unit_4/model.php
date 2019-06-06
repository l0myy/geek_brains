<?php
require_once "database.php";

function getAll($connect, $table, $startIndex = 1, $countView = 5, $orderby = 'id')
{
$query = sprintf("SELECT * FROM {$table} order by {$orderby} desc limit {$startIndex}, {$countView}");
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $res = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }
    //var_dump('Hello');
    return $res;
}


function renderAllGoods($connect) {
    $query = "SELECT * FROM goods";
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $goods = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $goods[] = $row;
    }
    return $goods;          
}

?>