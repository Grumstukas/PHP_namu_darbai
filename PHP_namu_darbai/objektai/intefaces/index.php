<?php

interface Bird
{
    function getName();
}

interface Fly
{
    function canFly();
}

interface Swim
{
    function canSwim();
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

class Penguine implements Bird, Swim
{
    public function getName()
    {
        echo '<br> Aš esu Pingvinas <br>';
    }
    public function canSwim()
    {
        echo '<br> Aš moku plaukti <br>';
    }
}

class Duck implements Bird, Swim, Fly
{
    public function getName()
    {
        echo '<br> Aš esu Antis <br>';
    }
    public function canSwim()
    {
        echo '<br> Aš moku plaukti <br>';
    }
    public function canFly()
    {
        echo '<br> Aš ir skaraidyti moku <br>';
    }
}

class Hedgehog implements Fly
{
    public function hello()
    {
        echo '<br> Labutis, aš esu ežiuks.. <br>';
    }
    public function canFly()
    {
        echo '<br> Nors aš ežiukas, bet kai paspiria - tai skrendu <br>';
    }
}


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
$a = [];
$a[] =  new Hedgehog;
$a[] =  new Duck;
$a[] =  new Penguine;
$a[] =  new Hedgehog;
$a[] =  new Duck;
$a[] =  new Penguine;

foreach ($a as $object){

    if($object instanceof Bird){
        $object->getName();
        if($object instanceof Fly){
            $object->canFly();
        }
        if($object instanceof Swim){
            $object->canSwim();
        }
        echo '* * * * * * * * * * * * * * * * * * * * * * * * * * * *';
    } else {
        echo '<br>Aš nepaukštis<br>';
        echo '* * * * * * * * * * * * * * * * * * * * * * * * * * * *';
    }

    
}