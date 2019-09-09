<?php

/* klasė - brėžinys, iš kurio kurimi objktai;
pagrindinė objekto savybė - jis priklauso kažkokiai klasei !!!!
objektas gali priklausyti ne būtinai vienai klasei.
vienas failas - viena klase.

objektas -  objekto tipo kintamasis.

 */
/*Čia jau klasė  */
// class Briedis
// {

// }

class Briedis
{
    //vis klase padalinta į dvi dalis, viršuje - savybės, apačioje - metodai:
    //savybės:
    public $vardas;
    protected $ragai = 'Dideli'; //čia galima priskirti reikšmę, bet jame kviesti funkcijos - NEGALIMA; genai..
    private $sienas = 'daug'; //vaikams neduoda;

    //metodai:
    public function getRagai()
    {
        return $this->ragai; //$this - objekto vardas, kol nežinom tikrojo būsimo objekto vardas;
    }

    public function setRagai($ragai)
    {   
        if($ragai == 'mazi'){
            return;
        }
        $this->ragai = $ragai;
    }
}



$zveris1 = new Briedis;
$zveris1->vardas = 'Buliukas'; // čia ($zveris1 -> vardas) yra vienas kintamasis!
// $zveris1->ragai = 'dideli'; //kai savybė 'protected', taip reikšmė nepriskiriama. naudokimės geteriais
$zveris1->getRagai();
var_dump($zveris1); // duos object(Briedis)#4 (0) { }   #4 - resurso identifikatorius
// echo '<br>';
$zveris1->setRagai('mazi');
echo '<br>';
var_dump($zveris1->getRagai());
echo '<br><br>';

$zveris2 = new Briedis;
$zveris2->vardas = 'Karvyte';
var_dump($zveris2); // duos object(Briedis)#5 (0) { }   #5 - resurso identifikatorius
$zveris2->setRagai('garbiniuoti');
echo '<br>';
var_dump($zveris2->getRagai());
echo '<br><br>';

$zveris3 = $zveris1;
var_dump($zveris3); // duos object(Briedis)#4 (0) { }   tas pats briedis1...
echo '<br><br>';

//lyginami objektai verčiami stringais, ir jeigu tie stringai lygūs tai ir objektai pasidaro lygūs, taip lyginti objektų - NEGALIMA.
var_dump($zveris1 == $zveris3); //bool(true)
echo '<br>';
var_dump($zveris1 == $zveris2); //bool(true)
echo '<br>';



/*Klasės gali giminiuotis... Briedis bus tėvas */

class Zuikis extends Briedis
{
    protected $ragai; //zuikiui ragai nepatiko, tai jis juos nunulino
    private $ausys = 'ilgos';

    public function setRagai($ragai) //zuikiui ragai nepatinka, jis jų nepriimia
    {   
            return;
    }

    public function getSienas()
    {   
            return $this->sienas;
    }
}
$zveris3 = new Zuikis;
$zveris3->vardas = 'Puikis';
var_dump($zveris3);
echo '<br>';
$zveris3->setRagai('ragai ragai');
var_dump($zveris3->getRagai());
echo '<br>';
var_dump($zveris3->getSienas());
echo '<br>';