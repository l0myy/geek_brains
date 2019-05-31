<?php 
include "view/v_date.php";

  include 'Twig/Autoloader.php';
  Twig_Autoloader::register();

  //подключаемся к БД
  try {
    $dbh = new PDO('mysql:dbname=myPhoto; host=localhost', 'root', '');
  } catch (PDOException $e) {
    echo "Error: Could not connect. " . $e->getMessage();
  }
  
  // установка error режима
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// выполняем запрос
try {
    // формируем SELECT запрос
    // в результате каждая строка таблицы будет объектом
    $sql = "SELECT name , url FROM Photos ";
    $sth = $dbh->query($sql);
    while ($row = $sth->fetchObject()) {
      $data[] = $row;
    }
}
 catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
  }
  
// закрываем соединение
unset($dbh);

//var_dump($data[]);
  
//формируем массив для шаблона
$nav = array(
    'header' => array(
      array('name' => 'Gallery', 'url' => 'index.php')
    ),
    'content' => $data
  );

  //Подключаем вывод контента на страницу
  include 'view/v_main.php';

?>