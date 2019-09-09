<?php

$k = 'katė';
echo $k.'<br><br>';
function vardas(&$argumentas, $arg2 = 'default'){

    if(strlen($argumentas)<50){
        $argumentas = '+++'.$argumentas;
        echo $argumentas.'<br>';
        echo Vardas($argumentas);
    }else{
        return;  
    }
}

$la = 'LA-LA';

vardas($la);
// vardas($la);
// vardas($la);

// echo $s.'<br><br>';  IŠ FUNKCIJOS NEMATOMAS!


function suma(...$arg){ //... = daug argumentu!
    _dc($arg);
}

$a = function(){
    return range(1,6);
};

echo suma(1,2,3,4,5,6,7,$a()); //anonimine funkcija
echo suma(1,2,3,4);
echo suma(1,2);

