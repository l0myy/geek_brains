<?php

trait myTrait {
    
    private function __construct() {  }
    
    public static function getInstance() {
        if ( empty(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;                     
    }

    public function doAction() { echo "Singleton test"; }

}

class Singleton {
    
    private static $instance;
    
    use myTrait;

}

$obj_1 = Singleton::getInstance();
$obj_2 = Singleton::getInstance();

var_dump($obj_1 === $obj_2);    // Same object


?>
