<?php

/*Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, 
tai prideda prie metaliniaiPinigai, jeigu didesnis nei 2 prie popieriniaiPinigai. 
Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. 
Sukurti klasės objektą ir pademonstruoti veikimą. */

class Pinigine
{
    private $metaliniaiPinigai;
    private $popieriniaiPinigai;

    public function ideti($kiekis)
    {
        if($kiekis<=2){
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $metalas = $kiekis % 5;
            $popierius = $kiekis - $metalas;
            $this->metaliniaiPinigai += $metalas;
            $this->popieriniaiPinigai += $popierius;
        }
        return $this;
    }

    public function skaiciuoti()
    {
        echo 'Mano piniginėje yra '.$this->metaliniaiPinigai.' monetų.<br>';
        echo 'Mano piniginėje yra '.$this->popieriniaiPinigai.'  popierinių pinigų.<br>';
        echo 'Mano piniginėje iš viso yra '.($this->metaliniaiPinigai + $this->popieriniaiPinigai).' pinigų.<br>';
    }
}

$manoPinigine = new Pinigine;
$manoPinigine
-> ideti(2)
-> ideti(17)
-> ideti(1)
-> ideti(19)
-> ideti(1)
-> ideti(23)
-> ideti(1)
->skaiciuoti();

echo '<br>* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br>';

/*
++Sukurti klasę Stiklinė. 
++Sukurti privačią savybę tūris ir kiekis. 
Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. 
Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. 
Parašyti metodą ispilti(), kuris grąžiną kiekį. 
Sukurti tris stiklines objektus su tūriais: 200, 150, 100. 
Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę. */

class Stikline
{
    private $turis;
    private $kiekis;

    public function __construct($turis){
        $this->stiklines_turis($turis);
    }

    public function stiklines_turis($turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {
        if($this->turis >= $kiekis){
            $this->kiekis = $kiekis;
        } else {
            $this->kiekis = $this->turis;
        }        
    }

    public function ispilti()
    {
        return $this->kiekis;
    }
}

$puodelis1 = new Stikline(200);
$puodelis2 = new Stikline(150);
$puodelis3 = new Stikline(100);

$puodelis1->ipilti(200);
$puodelis2->ipilti($puodelis1->ispilti());
$puodelis3->ipilti($puodelis2->ispilti());

echo $puodelis3->ispilti();

echo '<br>* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br>';

/*
Sukurti klasę Grybas.
Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. 
Kuriant Grybo objektą, jo savybės turi būti atsitiktinai priskiriamos taip: 
    valgomas- true arba false, 
    sukirmijes- true arba false 
    svoris- nuo 5 iki 45. 
Eiti grybauti, t.y. Kurti naujus Grybas objektus tol, kol bus pririnkta 500 svorio nesukirmijusių ir valgomų grybų. */

class Grybas
{
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct()
    {
        $this->setValgomas();
        $this->setSukirmijes();
        $this->setSvoris();
    }

    public function setValgomas()
    {
        $true_false = rand(0,1);
        if($true_false){
            $this->valgomas = true;
        }else{
            $this->valgomas = false;
        }
    }
    public function setSukirmijes()
    {
        $true_false = rand(0,1);
        if($true_false){
            $this->sukirmijes = true;
        }else{
            $this->sukirmijes = false;
        }
    }

    public function setSvoris()
    {
        $this->svoris = rand(5,45);
    }

    public function getValgomas()
    {
        return $this->valgomas;
    }

    public function getSukirmijes()
    {
        return $this->sukirmijes;
    }

    public function getSvoris()
    {
        return $this->svoris;
    }

    public static function create(){
        return new self;
    }

}

class Pintinele
{
    private $svoris;

    public function eiti_grybauti(Grybas $grybas) //svarbu klases vadras
    {
        if($grybas->getValgomas() && $grybas->getSukirmijes()){
            $this->svoris += $grybas->getSvoris();
        }
    }

    public function getSvoris()
    {
        return $this->svoris;
    }
}

$manoPintinele = new Pintinele;
$grybai = 0;
do{
    $manoPintinele->eiti_grybauti(Grybas::create());
    $grybai++;
} while($manoPintinele->getSvoris() < 500);

echo $grybai.'<br>';
echo $manoPintinele->getSvoris().'<br>';

