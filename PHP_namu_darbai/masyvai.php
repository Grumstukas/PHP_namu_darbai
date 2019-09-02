<?php
$style = '<p style = "color:blue; font-size:15px; font-weight:800">';
$styleR = '<p style = "color:crimson; font-size:15px; font-weight:800">';

echo '<p style = "color:blue; font-size:20px; font-weight:800">
------ Pamoka 4 ------------- Masyvai -------------><p>';

echo $style.'forEach ---><p>';

$masyvas = ['mano knygos', 'zurnalai' => 'seni zurnalai', 'zaislai' => 'suns zaislai'];

foreach($masyvas as $value){
    echo '<br>';
    echo $value;
}

echo '<br><br>';


foreach($masyvas as $key => $value){
    echo '<br>';
    echo $key.'-'.$value;
}

echo $style.'--- Pamoka 4 ---  pakeisti reiksmę -------------><p>';
/*taip neveikia*/
foreach($masyvas as $value){
    $value = 'bla bla';
}
print_r($masyvas);

echo '<br>';

/*taip veikia*/
foreach($masyvas as &$value){
    
    $value = 'bla bla';
}
print_r($masyvas);

echo '<br>';

foreach($masyvas as $key => $value){
    
    $masyvas[$key] = 'ble ble';
}
print_r($masyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 1 -------------><p>';
/*Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25. */

$masyvas = [];

foreach(range(0,29) as $val){
    $masyvas[$val] = rand(5,25);
}
unset ($val);
print_r($masyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ----Suskaičiuokite kiek masyve yra reikšmių didesnių už 10 --------><p>';
$daugiauNei10 = 0;
foreach($masyvas as $val){
    if($val >10){
        $daugiauNei10++;
    }
}
unset ($val);
echo $daugiauNei10;

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ----Raskite didžiausią masyvo reikšmę --------><p>';
$max = $masyvas[0];
echo $max;
echo '<br>';
foreach($masyvas as $val){
    if($val > $max){
        $max = $val;
    }
}
unset ($val);
echo $max;

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ----Suskaičiuokite visų reikšmių sumą --------><p>';
$sum = 0;
foreach($masyvas as $val){
    $sum += $val;
}
unset ($val);
echo $sum;

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ---- Sukurkite naują masyvą, kurio reikšmės yra 1 
uždavinio masyvo reikšmes minus tos reikšmės indeksas --------><p>';
$naujasMasyvas = [];
foreach($masyvas as $key => $val){
    $naujasMasyvas [] = $val-$key;
}
print_r($naujasMasyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ---- Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, 
kad bendras masyvas padidėtų iki indekso 39 --------><p>';

foreach(range(1,10) as $val){
    $naujasMasyvas[] = rand(5,25);
}
unset ($val);
print_r($naujasMasyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ---- Iš masyvo elementų sukurkite du naujus masyvus. 
Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių --------><p>';
$porinisMasyvas = [];
$neporinisMasyvas = [];

foreach($masyvas as $val){
    if($val % 2 == 0){
        $porinisMasyvas[] = $val;
    }else{
        $neporinisMasyvas[] = $val;
    }
}
echo 'Porinis <br>';
print_r($porinisMasyvas);
echo '<br>Neporinis <br>';
print_r($neporinisMasyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ---- Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15 --------><p>';
foreach($porinisMasyvas as $key => $val){
    if($porinisMasyvas[$key] > 15){
        $porinisMasyvas[$key] = 0;
    }
}
echo 'Porinis <br>';
print_r($porinisMasyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ---- Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10 --------><p>';

foreach($porinisMasyvas as $key => $val){
    if ($porinisMasyvas[$key] > 10){
        echo $key;
        break;
    }
}

echo $style.'--- Pamoka 4 ---  Uždavinys 2 ---- Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą --------><p>';
print_r($masyvas);
foreach($masyvas as $key => $val){
    if($key % 2 == 0){
        unset($masyvas[$key]);
    }
}
echo '<br>';
print_r($masyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 3 ---- 200 ilgio masyvas iš random (ABCD), kiek kiekvienos raidės? --------><p>';
/*Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.*/

$abcd = [];
$abcdString = '';
$countA = $countB = $countC = $countD = 0;

foreach(range(0,199) as $value){
    $letter = rand(1,4);
    $newValue = '';
    switch ($letter) {
        case 1:
            $newValue = 'A';
            $countA++;
            break;
        case 2:
            $newValue = 'B';
            $countB++;
            break;
        case 3:
            $newValue = 'C';
            $countC++;
            break;
        case 4:
            $newValue = 'D';
            $countD++;
        break;
    }
    $abcd[$value] = $newValue;
    $abcdString .= $newValue.', ';
}
echo $abcdString.'<br>';
echo 'A = '.$countA.'<br>';
echo 'B = '.$countB.'<br>';
echo 'C = '.$countC.'<br>';
echo 'D = '.$countD.'<br>';

echo 'Viso = '.($countA+$countB+$countC+$countD);

echo $style.'--- Pamoka 4 ---  Uždavinys 4 ---- Išrūšiuokite 3 uždavinio masyvą pagal abecėlę --------><p>';

natsort($abcd);
echo implode(' ',$abcd);

echo $style.'--- Pamoka 4 ---  Uždavinys 5 ---- Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote. --------><p>';
function abcArray(){
    $abcd = [];
    $abcdString = '';

    foreach(range(0,199) as $value){
        $letter = rand(1,4);
        $newValue = '';
        switch ($letter) {
            case 1:
                $newValue = 'A';
                break;
            case 2:
                $newValue = 'B';
                break;
            case 3:
                $newValue = 'C';
                break;
            case 4:
                $newValue = 'D';
            break;
        }
        $abcd[$value] = $newValue;
        $abcdString .= $newValue.', ';
    }
    return $abcd;
}
$ABC = abcArray();
$abc2 = abcArray();
$abc3 = abcArray();
$uniqueValues = 0;

foreach($ABC as $key => $value){
    if(!in_array(($ABC[$key].$abc2[$key].$abc3[$key]),$ABC)){
        $uniqueValues++;
    }
    $ABC[$key] = $ABC[$key].$abc2[$key].$abc3[$key];
}
print_r($ABC);
echo '<br>';
echo $uniqueValues;

echo $style.'--- Pamoka 4 ---  Uždavinys 6 ---- Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. 
Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios (t.y. Neturi kartotis). --------><p>';

$masyvas1 = [];
$masyvas2 = [];
$unikaliosReiksmes1 = [];
$unikaliosReiksmes2 = [];

foreach(range(0,99) as $val){
    while(true){
        $num1 = rand(100,999);
        if(!in_array($num1,$unikaliosReiksmes1)){
            break;
        }
    }
        $masyvas1[$val] = $num1;
        $unikaliosReiksmes1[$val] = $num1;
}
unset($val);

foreach(range(0,99) as $val){
    while(true){
        $num2 = rand(100,999);
        if(!in_array($num2,$unikaliosReiksmes2)){
            break;
        }
    }
        $masyvas2[$val] = $num2;
        $unikaliosReiksmes2[$val] = $num2;
}
unset($val);
_d($masyvas1);
echo 'Masyvas 1 <br>'.implode(' ',$masyvas1);
echo '<br>';
echo 'Masyvas 2 <br>'.implode(' ',$masyvas2);

echo $style.'--- Pamoka 4 ---  Uždavinys 7 ---- Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve. --------><p>';
$dvigubasMasyvas = $masyvas1;
$naujasUnikalusMasyvas = [];
foreach(range(0,99) as $val){
    $dvigubasMasyvas[] = $masyvas2[$val];
}
// echo implode(' ',$dvigubasMasyvas);
// echo '<br><br>';
foreach($dvigubasMasyvas as $elementas){
    if(in_array($elementas,$masyvas1) && (!in_array($elementas,$masyvas2))){
        $naujasUnikalusMasyvas[] = $elementas;
    }
}
echo 'Masyvas iš masyvo 1 ir masyve 2 nesančių reikšmių <br>'.implode(' ',$naujasUnikalusMasyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 8 ---- Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose. --------><p>';
$besikartojantisMasyvas = [];
foreach($dvigubasMasyvas as $elementas){
    if(in_array($elementas,$masyvas1) && (in_array($elementas,$masyvas2))){
        $besikartojantisMasyvas[] = $elementas;
    }
}
echo 'Masyvas iš masyve 1 ir masyve 2 besikartojančių reikšmių <br>'.implode(' ',$besikartojantisMasyvas);

echo $style.'--- Pamoka 4 ---  Uždavinys 9 ---- Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, 
o jo reikšmės iš būtų antrojo masyvo. --------><p>';

$sestoMasyvoMisraine = [];
$masyvo1ilgis = count($masyvas1);
foreach (range(0,$masyvo1ilgis-1) as $key){
    $sestoMasyvoMisraine[$masyvas1[$key]] = $masyvas2[$key];
}
print_r($sestoMasyvoMisraine);

echo $style.'--- Pamoka 4 ---  Uždavinys 10 ---- Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
Du pirmi skaičiai - atsitiktiniai nuo 5 iki 25. 
Trečias, pirmo ir antro suma. 
Ketvirtas- antro ir trečio suma. 
Penktas trečio ir ketvirto suma ir t.t. --------><p>';
$arrayOf10 = [];
$numb = 0;
for($i = 0; $i<10; $i++){
    if($i < 2){
        $numb = rand(5,25);
        $arrayOf10[] = $numb;
    }else{
        $arrayOf10[] = ($arrayOf10[$i-1]+$arrayOf10[$i-2]);
    }
}
echo implode(' ',$arrayOf10);

echo $styleR.'--- Pamoka 4 ---  Papildomas --------><p>';


echo $styleR.'---- Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. ----<p>';

$vienuoliktasMasyvas = [];
foreach(range(0,100) as $values){
    $vienuoliktasMasyvas[] = rand(0,300);
}
echo implode(' ',$vienuoliktasMasyvas);

echo $styleR.'---- Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. ----<p>';

function dublicate($value, $masyvas){
    $sutapimai = 0;
    for($a = 0; $a < count($masyvas); $a++){
        if($masyvas[$value] == $masyvas[$a]){
            $sutapimai++;
        }
    }
    return $sutapimai;
}
$mapOfDuplikate = [];
$uniqueValues = [];
for($i = 0; $i <count($vienuoliktasMasyvas); $i++){
    if(dublicate($i, $vienuoliktasMasyvas) > 1){
        $mapOfDuplikate[$i] = $vienuoliktasMasyvas[$i];
    }else{
        $uniqueValues[] = $vienuoliktasMasyvas[$i];
    }
}
echo 'Dublikatai su raktais į orginalų masyvą <br>';
print_r($mapOfDuplikate);
// echo '<br><br>';
// print_r($uniqueValues);

foreach($mapOfDuplikate as $key => $value){
    while(true){
        $num2 = rand(0,300);
        if(!in_array($num2,$uniqueValues)){
            break;
        }
    }
    $vienuoliktasMasyvas[$key] = $num2;
    $uniqueValues[] = $num2;
}
echo '<br> Orginalus masyvas su pakeistomis besidubliuojančiomis reikšmėmis <br>';
echo implode(' ', $vienuoliktasMasyvas);

echo $styleR.'---- Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. ----<p>';
$maxValue = $vienuoliktasMasyvas[0];
foreach($vienuoliktasMasyvas as $value){
    if($maxValue < $value){
        $maxValue = $value;
    }
}
echo 'Didžiausias elementas = '.$maxValue;
rsort($vienuoliktasMasyvas);
echo '<br><br>';


$piramide = [];
$index = 0;
foreach($vienuoliktasMasyvas as $value){
    $index++;
    if($index % 2 == 0){
        array_unshift($piramide,$value);
    }else{
        array_push($piramide,$value);
    }
}
echo implode(' ',$piramide);

echo $styleR.'---- Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės) ----<p>';
$sumRight = 0;
$sumLeft = 0;
$index = 0;
foreach($piramide as $value){
    $index++;
    if($index < 51){
        $sumLeft += $value;
    }elseif($index > 51){
        $sumRight += $value;
    }
}
echo '<br>Dešne '.$sumRight;
echo '<br>Kairė '.$sumLeft;

echo $styleR.'---- Jeigu sumų skirtumas yra didesnis nei 300 rūšiavimą kartokite. ----<p>';

echo 'Skirtumas '.($sumLeft-$sumRight);
