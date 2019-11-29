<?php
//pagal dėstytoją:
/********************************************* */
class Gnoms
{
    private static $count;

    public static function setGnoms($count){
        self::$count = $count;
    }
    public static function getGnoms(){
        return self::$count;
    }
    public static function gnoms_in_bus_stop($gnoms_that_get_in_bus)
    {
        self::$count -= $gnoms_that_get_in_bus;
    }

}
/********************************************* */
abstract class Transport
{
    protected $passengers_in = 0;

    abstract protected function get_max(); //gražins man konstantą;
    
    
    public function get_in($passenger)
    {
        $buvo = $this->passengers_in;
        $this->passengers_in += $passenger;
        $this->passengers_in = min($this->passengers_in, $this->get_max()); //grazina arba $this->passengers_in, arba $this->max
        echo 'ilipo keleivių '.($this->passengers_in - $buvo).'<br> dabar yra keleivių '.$this->passengers_in.'<br><br>';
        return ($this->passengers_in - $buvo);
    }

    public function get_out($passenger)
    {
        $buvo = $this->passengers_in;
        $this->passengers_in -= $passenger;
        $this->passengers_in = max($this->passengers_in, 0); //grazina arba $this->passengers_in, arba 0
        echo 'išlipo keleivių '.($buvo - $this->passengers_in ).'<br> dabar yra keleivių '.$this->passengers_in.'<br><br>';
        return $this->passengers_in;
    }


}

/********************************************* */

class Car extends Transport
{
    const MAX = 4; 

    protected function get_max()
    {
        return self::MAX;
    }

}

/********************************************* */

class Bus extends Transport
{
    const MAX = 45; 
    
    protected function get_max()
    {
        return self::MAX;
    }
}

/********************************************* */

Gnoms::setGnoms(100);

echo '***** car-1 *****<br>';
$car1 = new Car;
$car1->get_in(3);
$car1->get_in(1);
$car1->get_out(2);
$car1->get_out(1);
$car1->get_in(3);

echo '***** car-2 *****<br>';

$car2 = new Car;
$car2->get_in(6);

echo '***** Bus-1 *****<br>';
echo 'Stoteleje nykstuku yra : '.Gnoms::getGnoms().'<br>';
$bus1 = new Bus;

Gnoms::gnoms_in_bus_stop($bus1->get_in(Gnoms::getGnoms()));

echo 'Stoteleje nykstuku liko : '.Gnoms::getGnoms().'<br>';

$car4 = new Car;

Gnoms::gnoms_in_bus_stop($car4->get_in(Gnoms::getGnoms()));

echo 'Stoteleje nykstuku liko : '.Gnoms::getGnoms().'<br>';

$bus2 = new Bus;

Gnoms::gnoms_in_bus_stop($bus2->get_in(Gnoms::getGnoms()));

echo 'Stoteleje nykstuku liko : '.Gnoms::getGnoms().'<br>';

$car5 = new Car;

Gnoms::gnoms_in_bus_stop($car5->get_in(Gnoms::getGnoms()));

echo 'Stoteleje nykstuku liko : '.Gnoms::getGnoms().'<br>';

$car6 = new Car;

Gnoms::gnoms_in_bus_stop($car6->get_in(Gnoms::getGnoms()));

echo 'Stoteleje nykstuku liko : '.Gnoms::getGnoms().'<br>';

// $bus1->get_in(6);
// $bus1->get_in(3);
// $bus1->get_in(8);
// $bus1->get_in(6);
// $bus1->get_in(16);
// $bus1->get_in(10);

echo '***** Gnoms *****<br>';


// Gnoms::getGnoms();