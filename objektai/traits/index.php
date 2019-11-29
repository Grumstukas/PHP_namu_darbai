<?php
class Base {
    public function sayHello() 
    {
        echo 'Hello ';
    }
}
/* Bruožai */
trait SayWorld {
    public function sayHello()  //traitu metodai overidina tėviškus metodus
    {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base 
{
    use SayWorld; //šitas usas nurodo kad naudosim traitą
}

$o = new MyHelloWorld();
$o->sayHello();

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

class Html 
{
    private $size = 10;
    private $color = 'Red';
    private $letter_spacing = 0.5;
    private $text = 'No text';

    public function print()
    {
        echo '<br>';
        echo '<span style="
        font-size:'.$this->size.'px;
        color:'.$this->color.';
        letter-spacing:'.$this->letter_spacing.';">
        '.$this->text.'</span>';
        echo '<br>';
    }

    public function changeSize($size){
        $this->size = $size;
        return $this; //gražina savo objektą
    }

    public function changeColor($color){
        $this->color = $color;
        return $this; //gražina savo objektą
    }

    public function changeLetter_spacing($letter_spacing){
        $this->letter_spacing = $letter_spacing;
        return $this; //gražina savo objektą
    }

    public function changeText($text){
        $this->text = $text;
        return $this; //gražina savo objektą
    }

    public function return_other(Html $obj) //yterpiamas tik atitinkantis objektas
    {
        return $obj;
    }

    public static function create(){
        return new self;
    }
}

$myHTML = new Html;
$myHTML->print();

$myHTML->changeSize(20)->print();
$myHTML->changeColor('blue')->print();
$myHTML->changeLetter_spacing(1)->print();
$myHTML->changeText('New Text')->print();

$myHTML->changeSize(30)->changeColor('violet')->changeLetter_spacing(2)->changeText('My Text')->print();

$string2 = new Html;
$string = new Html;
$string
->changeSize(15)
->changeColor('rose')
->return_other($string2) //čia vyksta įterpimas - injection
->changeLetter_spacing(5)
->changeText('Alibaba')
->print();

$myHTML2 = Html::create();
$myHTML2->changeSize(30)->changeColor('purple')->changeLetter_spacing(2)->changeText('My Text')->print();