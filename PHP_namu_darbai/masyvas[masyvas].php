<?php
$style = '<p style = "color:blue; font-size:15px; font-weight:800">';
$styleR = '<p style = "color:crimson; font-size:15px; font-weight:800">';

echo '<p style = "color:blue; font-size:20px; font-weight:800">
------ Pamoka 5 ------------- Masyvai[masyvai] -------------><p>';


echo $style.'--- Pamoka 5 ---  Uždavinys 1 -------------><p>';
$tevas = [];
foreach(range(0,9) as $val){
    $tevas[] = [];
    foreach(range(0,4) as $val1){
        $tevas[$val][$val1] = rand(1,1);
    }
}
_dc($tevas);

echo $style.'--- Pamoka 5 ---  Uždavinys 2 ---Naudodamiesi 1 uždavinio masyvu: Suskaičiuokite kiek masyve yra elementų didesnių už 10;----------><p>';
$moreThan10 = 0;
foreach ($tevas as $val){
    foreach($val as $element){
        if($element > 10){
            $moreThan10++;
        }
    }
}
echo $moreThan10;

echo $style.'--- Pamoka 5 ---  Uždavinys 2 ---Naudodamiesi 1 uždavinio masyvu: Raskite didžiausio elemento reikšmę;----------><p>';

$max = $tevas[0][0];
foreach ($tevas as $val){
    foreach($val as $element){
        if($element > $max){
            $max = $element;
        }
    }
}
echo $max;

echo $style.'--- Pamoka 5 ---  Uždavinys 2 ---Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas 
(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)----------><p>';

foreach(range(0,4) as $element){
    $suma = 0;
    foreach(range(0,9) as $level){
        $suma += $tevas[$level][$element];
    }
    echo $suma.'<br>';
}

echo $style.'--- Pamoka 5 ---  Uždavinys 2 ---Visus antrus masyvus “pailginkite” iki 7 elementų;----------><p>';
foreach(range(0,9) as $level){
    $tevas[$level][] = rand(1,1);
    $tevas[$level][] = rand(1,1);
}
_dc($tevas);

echo $style.'--- Pamoka 5 ---  Uždavinys 2 ---Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai 
ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, 
turinčio indeksą 0 dideliame masyve, visų elementų sumai ;----------><p>';
$teta = [];

foreach(range(0,9) as $level){
    $suma = 0;
    foreach(range(0,6) as $element){
        $suma += $tevas[$level][$element];
    }
    $teta[] = $suma;
    // ${'insideArray'.$level} = $suma;
    echo $suma.'<br>';
}
_dc($teta);

echo $style.'--- Pamoka 5 ---  Uždavinys 3 --- Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas 
su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z----------><p>';
$raides = [];
foreach(range(0,9) as $level){
    $raides[] = [];
    $elementuKiekis = rand(2,20);
    foreach(range(0,$elementuKiekis) as $element){
        $raides[$level][$element] = chr(rand(65,90));
    }
}
_dc($raides);

echo $style.'--- Pamoka 5 ---  Uždavinys 4 ---Išrūšiuokite trečio uždavinio antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).----------><p>';

foreach(range(0,(count($raides)-1)) as $level){
    natsort($raides[$level]);
}
_dc($raides);

echo $style.'--- Pamoka 5 ---  Uždavinys 5 ---Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, 
kad elementai kurių masyvai trumpiausi eitų pradžioje.----------><p>';
function cmp($a, $b){
    return (count($a) <=> count($b));
}

usort($raides, "cmp");
_dc($raides);

echo $style.'--- Pamoka 5 ---  Uždavinys 6 ---Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas 
[user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. ----------><p>';
$users = [];
foreach(range(0,29) as $level){
    $user_id = rand(1,1000000);
    $place_in_row = rand(1,100);
    $userInfo = ['user_id' => $user_id, 'place_in_row' => $place_in_row];
    $users[$level] = $userInfo;
}
_dc($users);

echo $style.'--- Pamoka 5 ---  Uždavinys 7 a ---Išrūšiuokite 6 uždavinio masyvą pagal user_id didėjančia tvarka..----------><p>';


function userIdSort($a, $b){
    return ($a['user_id'] <=> $b['user_id']);
}
usort($users, "userIdSort");
_dc($users);

echo $style.'--- Pamoka 5 ---  Uždavinys 7 b ---Išrūšiuokite 6 uždavinio masyvą pagal place_in_row mažėjančia tvarka.----------><p>';

function place_in_rowSort($a, $b){
    return ($b['place_in_row'] <=> $a['place_in_row']);
}
usort($users, "place_in_rowSort");
_dc($users);



echo $style.'--- Pamoka 5 ---  Uždavinys 8 ---Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.----------><p>';

function someName(){
    $name = chr(rand(65,90));
    $nameLenght = rand(5,15);
    foreach(range(0,($nameLenght-1)) as $value){
        $name.= chr(rand(97,122));
    }
    return $name;
}

foreach(range(0,(count($users)-1)) as $level){
        $name = someName();
        $surname = someName();
        $users[$level]['name'] = $name;
        $users[$level]['surname'] = $surname;
}
_dc($users);

echo $style.'--- Pamoka 5 ---  Uždavinys 9 ---Sukurkite masyvą iš 10 elementų. 
Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. 
Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. 
Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. 
Ten kur masyvo nekūrėte reikšmę nuo 0 iki į0 įrašykite tiesiogiai.----------><p>';
$masyvas = [];
foreach(range(0,9) as $level){
    $levelLenght = rand(0,5);
    if($levelLenght > 0){
        foreach(range(0,$levelLenght) as $element){
            $masyvas[$level][$element] = rand(0,10);
        }
    }else{
        $masyvas[$level] = $levelLenght;
    }
} 
_dc($masyvas);

echo $style.'--- Pamoka 5 ---  Uždavinys 10 ---Paskaičiuokite 9 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip,
 kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.----------><p>';

 function masyvasSort($a, $b){
    $A = is_array($a) ? array_sum($a) : $a;
    $B = is_array($b) ? array_sum($b) : $b;

    return ($A <=> $B);
}
usort($masyvas, "masyvasSort");
_dc($masyvas);
//uasort ???

echo $styleR.'--- Pamoka 5 ---  Papildomas ---
Sukurkite masyvą iš 10 elementų. 
Jo reikšmės masyvai iš 10 elementų. 
Antro lygio masyvų reikšmės masyvai su dviem elementais VALUE ir COLOR. 
Reikšmė VALUE vienas iš atsitiktinai parinktų simbolių: #%+*@%, o reikšmė COLOR atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color----------><p>';

$langeliai = [];

foreach(range(0,9) as $horizontal){
    foreach(range(0,9) as $vertical){
        $randNumber = rand(1,6);
        switch ($randNumber){
            case 1:
                $value = '#';
                break;
            case 2:
                $value = '%';
                break;
            case 3:
                $value = '+';
                break;
            case 4:
                $value = '*';
                break;
            case 5:
                $value = '@';
                break;
            case 6:
                $value = '%';
                break;
        }
        $color = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        $LangelisInfo = ['value' => $value, 'color' => '#'.$color];
        $langeliai[$horizontal][$vertical] = $LangelisInfo;
    }
}
_dc($langeliai);

foreach(range(0,9) as $horizontal){
    echo '<div style = "display: block; width:150px;">';
    foreach(range(0,9) as $vertical){
        echo '<div style = "display: inline-block; float: left; text-align:center; font-size:13px; line-height:15px; width:15px; height:15px; background-color:'.$langeliai[$horizontal][$vertical]['color'].'">'.$langeliai[$horizontal][$vertical]['value'].'</div>';
    }
    echo '</div>';
}