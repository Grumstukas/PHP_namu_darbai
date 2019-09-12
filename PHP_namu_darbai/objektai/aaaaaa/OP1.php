<?php

class Transport
{
    protected static $passengers;
    protected $passengers_in;

    public function add($passenger)
    {
        $this->passengers_in = $passenger;
        
    }
    public function getPassengers_in()
    {
        return $this->passengers_in;
    }


}

/********************************************* */

class Car extends Transport
{
    const MAX = 4; 
    public function add($passenger)
    {
        if ($passenger <= self::MAX){
            parent::add($passenger);
        } else {
            echo 'Keleiviu per daug';
        }
    }
}

/********************************************* */

class Bus extends Transport
{
    const MAX = 45; 
    public function add($passenger)
    {
        if ($passenger <= self::MAX){
            parent::add($passenger);
        } else {
            echo 'Keleiviu per daug';
        }
    }
}

/********************************************* */


$car1 = new Car;
$car1->add(3);
echo $car1->getPassengers_in().'<br>';

$car2 = new Car;
$car2->add(6);
echo $car2->getPassengers_in();