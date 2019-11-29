<?php

class Grybas
{
    private $color;
    private $rusis;
    private static $vienasGrybas;


    private function __construct(){}
        private function __clone(){} //preventina klonavimą

    public static function create(){

        return self:: $vienasGrybas ?? self:: $vienasGrybas = new self;
    }





    public function paintGrybas($color)
    {
        $this->color = $color;
    }
    public function grybo_rusis($rusis)
    {
        $this->rusis = $rusis;
    }

    public function myColor()
    {
        return $this->color;
    }

    public function kokiaGryboRusis()
    {
        return $this->rusis;
    }
}

$grybas1 = Grybas::create();
$grybas1->paintGrybas('red');
echo $grybas1->myColor().'<br>';
$grybas1->grybo_rusis('baravykas');


echo $grybas1->kokiaGryboRusis().'<br>';
echo '<br>';
var_dump($grybas1);
echo '<br>';

$grybas2 = Grybas::create();
$grybas2->paintGrybas('blue');
echo $grybas2->myColor().'<br>';
$grybas2->grybo_rusis('musmire');
echo $grybas2->kokiaGryboRusis();

$grybas3 = Grybas::create();
$grybas3->paintGrybas('blue');
echo $grybas3->myColor().'<br>';
$grybas3->grybo_rusis('musmire');
echo $grybas3->kokiaGryboRusis();



echo '<br>';
var_dump($grybas1);
echo '<br>';
var_dump($grybas2);