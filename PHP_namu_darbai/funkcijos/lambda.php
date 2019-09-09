<?php


$a = range(19,27);

_dc($a);

//array_map ( callable $callback , array $array1 [, array $... ] ) : array
//$callback - funkcijos vardas

/* prie a prideti po 5*/

function plus5( $arg ){
    return $arg + 5;
}

$b = array_map('plus5', $a);

_dc($b);

/*********lambda - anonimine funkcija******************************************************************* */

$c = array_map(function($arg){
    return $arg + 10;
}, $a);

_dc($c);

/**************************************************************************** */

function suma($a, $b){
    $rand = rand(1,10);
    return $a + $b($rand, $a);
}

$arg1 = 5;
$arg2 = 8;  /*yra random + $arg1;*/

_dc(
    suma($arg1, function($arg1, $arg2){
return $arg2 + $arg1;
    })
);

/******* Pamoka 5 --- Uždavinys 6********************************************** */

$users = [];
foreach(range(0,29) as $level){
    $user_id = rand(1,1000000);
    $place_in_row = rand(1,100);
    $userInfo = ['user_id' => $user_id, 'place_in_row' => $place_in_row];
    $users[$level] = $userInfo;
}
_dc($users);

/******* išrūšiuoti mažėjančia tvarka  **************** */

// function userIdSort($a, $b){
//     return ($a['user_id'] <=> $b['user_id']);
// }
// usort($users, "userIdSort");

usort($users, function ($a, $b){
    return ($a['place_in_row'] <=> $b['place_in_row']);
});

_dc($users);



/*****************************skaicius pakeisti 5 kitus randominius************************************************* */

$a = 'aaghsbfansf554df54f64gd6fgdf4g1d65f4gr84dgsdg46s65dbsdg4';

//php preg_replace_callback

$b = preg_replace_callback('/\d/', function($arg){
       
        $skaicius = $arg[0];

        do{
            $pakeistas = rand(0,9);
        } while($skaicius == $pakeistas);

        //  _dc($arg);
        return $pakeistas;
    }, $a);

 _dc($a);
 _dc($b);

 /***************************** statinis kintamasis funkciojos viduje************************************************* */

 function A (){
     static $b = 0;

     return $b++;
 }

 /*statinis todel kad jis nenusinulina, kaip paveikslas ant sienos, jei atejom, papaišėm, palikom, grįžom ir radom ką palikom*/

 function B (){
    $b = 0;

    return $b++;
}
/*nestatinis todel kad jis nusinulina, kaip baltas lapas  , jei atejom ir atsinesem lapą, papaišėm, pasiiėmėm lapą su savim, grįžom jau su nauju lapu*/


 echo A().'<br>';
 echo A().'<br>';
 echo A().'<br>';
 echo A().'<br>';
 echo A().'<br>';

 echo B().'<br>';
 echo B().'<br>';
 echo B().'<br>';
 echo B().'<br>';
 echo B().'<br>';

  /***************************** rekursyvine statine lambdos funkcija ************************************************* */


  $T = function() use(&$T){ //lambda - nes neturi vardo

    static $i = 0;
    $i++;
    echo 'Įėjome ir i ='.$i.'<br>';
    if($i  >  10){
        return false;
    }else{
       $T(); 
    }
    
    echo 'Einam lauk ir i ='.$i.'<br>';

  };

  $T();