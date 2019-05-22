
<?php

class Water
{
static $id;
static $desc;


    function view(){
        echo "Группа товаров ".$this->desc."<br>";
        echo "ID группы: ".$this ->id."<br>";
        }

}
$a = new Water();
$a->id = 1;
$a->desc = 'Вода';

$a->view();


class Cola extends Water
{
private $price;
private $wasPrice;

function __construct($id,$desc,$price,$wasPrice){
$this->setId($id);
$this->setDesc($desc);
$this->setPrice($price);
$this->setWasPrice($wasPrice);
}

private function setId ($id){
    $this->id = $id;
}

private function setDesc ($desc){
    $this->desc = $desc;
}

private function setPrice ($price){
    $this->price = $price;
}

private function setWasPrice ($wasPrice){
    $this->wasPrice = $wasPrice;
}

function getId()
{
    return $this->id;
}

function getDesc()
{
    return $this->desc;
}

function getPrice()
{
    return $this->price;
}

function getWasPrice()
{
    return $this->wasPrice;
}

function view(){
    echo "Наименование товара: ".$this->getDesc()."<br>";
    echo "ID товара: ".$this ->getId()."<br>";
    echo "Цена товара: ".$this->getPrice()."<br>";
    echo "Старая цена товара: ".$this->getWasPrice()."<br>";
    }

}
$b = new Cola(2, 'Coca cola',55,100);
$b->view();


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
    //1 2 3 4 - из-за того, что $x static - при вызове функции foo() $x=0 будет пропускаться при каждом следующем вызове.


    class C {
        public function foo() {
        static $x = 0;
        echo "\n";
    echo ++$x;
    echo "\n";
        }
        }
        class D extends C {
        }
        $a1 = new C();
        $b1 = new D();
        $a1->foo(); 
        $b1->foo(); 
        $a1->foo(); 
        $b1->foo();
        //1 1 2 2 - так как мы создаем 2 разных экземпляра класса, то и увеличиваться $x будет в каждом классе свой.

?>