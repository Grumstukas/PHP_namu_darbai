<?php
echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Papildomas ------------->
Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. (reikės masyvo) <p>';

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$ilgis = 100000;
$kartojimai = 100;
$elementai = 50;
$z= 0;
$news = '';
while($z < $ilgis){
    $news .= ' '.$z;
    $z++;
}
//PIRMAS
$time_start = microtime_float();
$iii = 0;
while($iii < $kartojimai){
    $c = implode(" ", array_rand(array_flip(explode(" ", $news)), $elementai));
    $iii++;
}
$time_end = microtime_float();
echo $time_end - $time_start;
echo '<br>';echo '<br>';
$time_start = microtime_float();
$iii = 0;
while($iii < $kartojimai){
    $stringArray = explode(" ", $news);
    $array = [];
        for($i = 0; $i < $elementai; $i++){
            array_push($array,$stringArray[rand(0,(count($stringArray)-1))]);
        }
    $v = implode(' ',$array);
    $iii++;
}
$time_end = microtime_float();
echo $time_end - $time_start;


echo '<br>';


$time_start = microtime_float();

$masyvas = explode(' ', $news);
$masyvoIlgis = count($masyvas);
$panaudotiIndeksai = [];
$rezultatas = [];
$iii = 0;
while($iii < $kartojimai){

    while(count($panaudotiIndeksai) <= $elementai){

        while(true){
            $indeksas = rand(0, $masyvoIlgis-1);
            if(!in_array($indeksas,$panaudotiIndeksai)){
                break;
            }
        }

        $panaudotiIndeksai[] = $indeksas;
        $rezultatas[] = $masyvas[$indeksas];
    }

    $v = implode(',',$rezultatas);
$iii++;
}

// echo $v;
// print_r($rezultatas);

$time_end = microtime_float();
echo $time_end - $time_start;