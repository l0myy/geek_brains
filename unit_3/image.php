<?php 

include "view/v_date.php";

//формируем массив
  $nav = array(
    'header' => array(
      array('name' => 'Gallery', 'url' => 'index.php')
    ),
    'content' => array(
      array('name' => 'images/'.$_GET['photo'], 'url' => ' ') //получаем ссылку на фото через $_GET
    )
  );

  //подключаем Twig
  include 'Twig/Autoloader.php';
  Twig_Autoloader::register();
  

  //Подключаем вывод контента на сайт
include 'view/v_main.php';

?>