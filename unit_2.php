<?php

// Класс асбтрактного товара
abstract class Item {

    const PERCENT = 0.2; //процент прибыли от товара

    abstract function sum(); //функция подсчета суммы покупки
    abstract function profit(); //функця подсчета прибыли от покупки
}

/* Класс электронного товара
*/
class Electronic extends Item {

    const PRICE = 500; // цена товара
    public $count; // количество товара

    public function __construct($count){
        self::setCount($count);
    }

    public function setCount($count=0){
        $this->count = $count;
    }

    public function getPrice(){
        return PRICE;
    }

    public function getCount(){
        return $this->count;
    }

    public function sum(){
        return self::PRICE * self::getCount();
    }   

    public function profit(){
        return self::sum() * parent::PERCENT;
    }

}

class Physical extends Electronic {

    public function getPrice(){
      return parent::PRICE * 2;
  } 

  public function sum(){
      return self::PRICE * 2 * parent::getCount();
  }

  public function profit(){
      return self::sum() * parent::PERCENT;
  }
}

class Weights extends Item {

    private $price; //цена товара 
    private $weight; //вес товара
    
    public function __construct($price, $weight){
        self::setWeight($weight);
        self::setPrice($price);
    }
    
    public function setPrice($price=0){
        $this->price = $price;
    }
    
    public function setWeight($weight=0){
        $this->weight = $weight;
    }
    
    public function sum(){
        return $this->price * $this->weight;
    }
    
    public function profit()
    {
        return self::sum() * parent::PERCENT;
    }
}

$obj = new Electronic(2);
echo "Электронный товар <br>";
echo "Сумма покупки =".$obj->sum();
echo "<br>";
echo "Прибыль с покупки = ".$obj->profit()."<br>";

$obj2 = new Physical(3);
echo "<br> Штучный товар <br>";
echo "Сумма покупки =".$obj2->sum();
echo "<br>";
echo "Прибыль с покупки = ".$obj2->profit()."<br>";

$obj3 = new Weights(100,5);
echo "<br> Весовой товар <br>";
echo "Сумма покупки =".$obj3->sum();
echo "<br>";
echo "Прибыль с покупки = ".$obj3->profit();

?>