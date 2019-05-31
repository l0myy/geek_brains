<?php 

//подключаем шаблоны
try {
    $loader = new Twig_Loader_Filesystem('templates');
    
    $twig = new Twig_Environment($loader);
    
    $template = $twig->loadTemplate('main.tmpl');

//выводим всю на страницу
    echo $template->render(array (
        'nav' => $nav,
        'updated' => $date->format('d-m-Y'),
        'title' => 'My Gallery'
      ));
    
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
  }

?>