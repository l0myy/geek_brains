
<?php

class Item
{
public $id;
public $desc;
public $price;

function view(){
echo "<h2>$this->desc</h2><p>$this->price</p>";
}
}
$a = new Item();
$a->id = 1;
$a->desc = 'Описание товара';
$a->price = '25$';
$a->view();


class ConstructItem extends Item
{
function __construct($id, $desc,$price){
$this->id = $id;
$this->desc = $desc;
$this->price = $price;
}

}
$b = new ConstructItem(2, 'Описание', 55,100);
$b->view();


class MathOperations
{
const PI = 3.14;
public function abs($x){
return ($x >= 0) ? $x : (-1) * $x;
}
public function RangeLength($rad){
return 2 * $rad * self::PI;
}
}

echo MathOperations::RangeLength(55);

echo "<p></p>";
/*
class A {
    public function foo() {
    static $x = 0;
    echo "\n";
    echo ++$x;
    echo "\n";
    }
    }
    $a1 = new A();
    $a2 = new A();
    $a1->foo();
    $a2->foo();
    $a1->foo();
    $a2->foo();


    class A {
        public function foo() {
        static $x = 0;
        echo "\n";
    echo ++$x;
    echo "\n";
        }
        }
        class B extends A {
        }
        $a1 = new A();
        $b1 = new B();
        $a1->foo(); 
        $b1->foo(); 
        $a1->foo(); 
        $b1->foo();*/

        class A {
            public function foo() {
            static $x = 0;
            echo ++$x;
            }
            }
            class B extends A {
            }
            $a1 = new A;
            $b1 = new B;
            $a1->foo(); 
            $b1->foo(); 
            $a1->foo(); 
            $b1->foo(); 



?>