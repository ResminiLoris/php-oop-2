<?php

class Product{

    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    //getter
    public function getName()
    {
        return $this->name;
    }

    //setter
    public function setName($new_name)
    {
        $this->name= $new_name;
    }
}

class DiscountedProduct extends Product{
    public $discount;

    public function getDiscount($percentage = 20)
    {
        $discount = $this->price - ($this->price * ($percentage / 100));
        return "sconto applicato: $discount";
    }
}


class User{
    public $name;
    public $surname;
    public $cart;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}



class Employee extends User{
    public $level;
    public $years;
    public $work_id;
    public $special_discount;
}

class PremiumUser extends User{
    public $active_subscription=true;
    public $special_discount;
}

// $product1= new Product ("pentola", 9.99); 

// foreach ($product1 as $property=> $value){
//     echo "<span>$property: $value</span> <br>"; 
// }

