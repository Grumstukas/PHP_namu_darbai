<?php
echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 1 -------------><p>';
/*
Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
*/

$vardas = 'Jonas';
$pavarde = 'Ponas';
$gimimoMetai = 1964;
$dabartiniaiMetai = 2019;

$amzius = $dabartiniaiMetai - $gimimoMetai;
echo 'Aš esu '.$vardas.' '.$pavarde.'. Man yra '.$amzius.' metai(ų).';

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 2 -------------><p>';
/*Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() 
jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. 
Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. */

$pirmas = rand(0,4);
$antras = rand(0,4);

if($pirmas > $antras && $antras != 0){
    $rezultatas = $pirmas / $antras;
    echo $pirmas.' / '.$antras.' = '.round($rezultatas,2);
} 
    elseif($pirmas < $antras && $pirmas != 0){
        $rezultatas = $antras / $pirmas;
    echo $antras.' / '.$pirmas.' = '.round($rezultatas,2);
    }
        elseif($pirmas = $antras && $pirmas != 0 && $antras != 0){
            $rezultatas = 1;
            echo $pirmas.' / '.$antras.' = '.round($rezultatas,2);
            }else{
                echo 'dalyba iš nulio negalima';
            }

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 3 -------------><p>';
/*Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems 
priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį 
vidurinę reikšmę.
 */

 $trecias = rand(0,25);
 $ketvirtas = rand(0,25);
 $penktas = rand(0,25);
 echo 'trecias = '.$trecias.',<br>ketvirtas = '.$ketvirtas.'<br>penktas = '.$penktas;
 echo '<br>';

 if( ( $trecias > $ketvirtas && $trecias < $penktas ) || ( $trecias > $penktas && $trecias < $ketvirtas ) ){
     echo 'vidurinis iš trijų = '.$trecias;
 } 
    elseif ( ( $ketvirtas > $penktas && $ketvirtas < $trecias ) || ( $ketvirtas > $trecias && $ketvirtas < $penktas ) ){
        echo 'vidurinis iš trijų = '.$ketvirtas;
    }
        elseif ( ( $penktas > $ketvirtas && $penktas < $trecias ) || ( $penktas > $trecias && $penktas < $ketvirtas ) ){
            echo 'vidurinis iš trijų = '.$penktas;
        }

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 4 -------------><p>';
/*Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
 */
//kraštinės:
$A = rand(1,10);
$B = rand(1,10);
$C = rand(1,10);

echo 'A kraštinės ilgis: '.$A.'<br>B kraštinės ilgis: '.$B.'<br>C kraštinės ilgis: '.$C.'<br>';
if (($A >= $B && $A >= $C) && (($B + $C) > $A)){
    echo 'Ilgiausia kraštinė = '.$A.'<br> dvieju trumpesniu suma = '.($B+$C).'<br> Trikampį sudaryti - galima';
}
    elseif (($B >= $A && $B >= $C) && (($A + $C) > $B)){
        echo 'Ilgiausia kraštinė = '.$B.'<br> dvieju trumpesniu suma = '.($A+$C).'<br> Trikampį sudaryti - galima';
    }
        elseif (($C >= $A && $C >= $B) && (($A + $B) > $C)){
            echo 'Ilgiausia kraštinė = '.$C.'<br> dvieju trumpesniu suma = '.($A+$B).'<br> Trikampį sudaryti - galima';
        }

            elseif(($A >= $B && $A >= $C) && (($B + $C) < $A)){
                echo 'Ilgiausia kraštinė = '.$A.'<br> tačiau dvieju trumpesniu suma = '.($B+$C).' yra mažesnė už ilgiausią kraštinę.<br> Trikampį sudaryti - negalima';
            }
                elseif (($B >= $A && $B >= $C) && (($A + $C) < $B)){
                    echo 'Ilgiausia kraštinė = '.$B.'<br> tačiau dvieju trumpesniu suma = '.($A+$C).' yra mažesnė už ilgiausią kraštinę.<br> Trikampį sudaryti - negalima';
                }
                    elseif (($C >= $A && $C >= $B) && (($A + $B) < $C)){
                        echo 'Ilgiausia kraštinė = '.$C.'<br> tačiau dvieju trumpesniu suma = '.($A+$B).' yra mažesnė už ilgiausią kraštinę.<br> Trikampį sudaryti - negalima';
                    }
                        elseif(($A >= $B && $A >= $C) && (($B + $C) == $A)){
                            echo 'Ilgiausia kraštinė = '.$A.'<br> tačiau dvieju trumpesniu suma = '.($B+$C).' yra lygi ilgiausiai kraštinei.<br> Trikampį sudaryti - negalima';
                        }
                            elseif (($B >= $A && $B >= $C) && (($A + $C) == $B)){
                                echo 'Ilgiausia kraštinė = '.$B.'<br> tačiau dvieju trumpesniu suma = '.($A+$C).' yra lygi ilgiausiai kraštinei.<br> Trikampį sudaryti - negalima';
                            }
                                elseif (($C >= $A && $C >= $B) && (($A + $B) == $C)){
                                    echo 'Ilgiausia kraštinė = '.$C.'<br> tačiau dvieju trumpesniu suma = '.($A+$B).' yra lygi ilgiausiai kraštinei.<br> Trikampį sudaryti - negalima';
                                }

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 5 -------------><p>';
/*Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
 */

 $vienas = rand(0,2);
 $du = rand(0,2);
 $trys = rand(0,2);
 $keturi = rand(0,2);
 $nuliai = 0;
 $vienetai = 0;
 $dvejetai = 0;

 echo $vienas.'-'.$du.'-'.$trys.'-'.$keturi;

 if($vienas == 0){
     $nuliai++;
 }
    elseif($vienas == 1){
        $vienetai++;
    }
        elseif($vienas == 2){
            $dvejetai++;
        }
 if($du == 0){
    $nuliai++;
}
    elseif($du == 1){
        $vienetai++;
    }
        elseif($du == 2){
            $dvejetai++;
        }
if($trys == 0){
    $nuliai++;
}
    elseif($trys == 1){
        $vienetai++;
    }
        elseif($trys == 2){
            $dvejetai++;
        }
if($keturi == 0){
    $nuliai++;
}
    elseif($keturi == 1){
        $vienetai++;
    }
        elseif($keturi == 2){
            $dvejetai++;
        }
echo '<br>nuliai = '.$nuliai;
echo '<br>vienetai = '.$vienetai;
echo '<br>dvejetai = '.$dvejetai;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 5 (su dėstytoju, sake blogas pavyzdys :) ) -------------><p>';
$vienas = rand(0,2);
$du = rand(0,2);
$trys = rand(0,2);
$keturi = rand(0,2);


echo $vienas.'-'.$du.'-'.$trys.'-'.$keturi;

$string  = $vienas.$du.$trys.$keturi;
$nuliai = substr_count($string, '0');
$vienetai = substr_count($string, '1');
$dvejetai = substr_count($string, '2');

echo '<br>nuliai = '.$nuliai;
echo '<br>vienetai = '.$vienetai;
echo '<br>dvejetai = '.$dvejetai;
 
echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 5 (su dėstytoju, sake geras pavyzdys :) ) -------------><p>';
$vienas = rand(0,2);
$du = rand(0,2);
$trys = rand(0,2);
$keturi = rand(0,2);
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

echo $vienas.'-'.$du.'-'.$trys.'-'.$keturi;
if($vienas == 2){
    $dvejetai++;
}
if($du == 2){
    $dvejetai++;
}
if($trys == 2){
    $dvejetai++;
}
if($keturi == 2){
    $dvejetai++;
}

$suma = $vienas+$du+$trys+$keturi;
$vienetai = $suma - ($dvejetai * 2);
$nuliai = 4 -$vienetai - $dvejetai;

echo '<br>nuliai = '.$nuliai;
echo '<br>vienetai = '.$vienetai;
echo '<br>dvejetai = '.$dvejetai;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 6 -------------><p>';
/*Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį 
atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3> */

$h = rand(1,6);

echo '<h'.$h.'>'.$h.'</h'.$h.'>';

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 7 -------------><p>';
/*Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.  */
$vienas = rand(-10,10);
$du = rand(-10,10);
$trys = rand(-10,10);

if($vienas > 0 ){
    echo '<p style = "color:blue; font-size:13px; font-weight:800" >vienas = '.$vienas.'</p>';
}
    elseif($vienas < 0 ){
        echo '<p style = "color:green; font-size:13px; font-weight:800">vienas = '.$vienas.'</p>';
    }
        elseif($vienas == 0 ){
            echo '<p style = "color:red; font-size:13px; font-weight:800">vienas = '.$vienas.'</p>';
        }
if($du > 0 ){
    echo '<p style = "color:blue; font-size:13px; font-weight:800">du = '.$du.'</p>';
}
    elseif($du < 0 ){
        echo '<p style = "color:green; font-size:13px; font-weight:800">du = '.$du.'</p>';
    }
        elseif($du == 0 ){
            echo '<p style = "color:red; font-size:13px; font-weight:800">du = '.$du.'</p>';
        }
if($trys > 0 ){
    echo '<p style = "color:blue; font-size:13px; font-weight:800" >trys = '.$trys.'</p>';
}
    elseif($trys < 0 ){
        echo '<p style = "color:green; font-size:13px; font-weight:800">trys = '.$trys.'</p>';
    }
        elseif($trys == 0 ){
            echo '<p style = "color:red; font-size:13px; font-weight:800">trys = '.$trys.'</p>';
        }

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 8 -------------><p>';
/*Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau 
kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų 
atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000. */

$zvakiuKiekis = rand(5,3000);
$zvakiuKaina = 1;

function kiekKainuojaZvakes($kiekis, $kaina){
    $suma = $kiekis*$kaina;
    if($suma > 1000 && $suma < 2000){
        $nuolaida = 3;
     }
     elseif($suma >= 2000){
        $nuolaida = 4;
     }
     else{
         $nuolaida = 0;
     }
     return $nuolaida;
}
$nuolaida = (100-kiekKainuojaZvakes($zvakiuKiekis, 1))/100;
$kainaBeNuolaidos = $zvakiuKiekis * $zvakiuKaina;
$visaKaina = ($nuolaida>0) ? $kainaBeNuolaidos*$nuolaida : $kainaBeNuolaidos;

echo 'perkamų zvakiu kiekis: '.$zvakiuKiekis.'
<br> tururėtumėte sumokėti: '.$kainaBeNuolaidos.'
<br>nuolaida: '.kiekKainuojaZvakes($zvakiuKiekis, 1).'%
<br> tačiau pritaikius nuolaidą bus: '.$visaKaina;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 9 -------------><p>';
/*Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra 
mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite 
iki sveiko skaičiaus. */

$pirmas = rand(0,100);
$antras = rand(0,100);
$trecias = rand(0,100);

function average($pirmas,$antras,$trecias){
    $average = ($pirmas+$antras+$trecias)/3;
    return intval($average);
}
function isLessThan10orMoreThan90($skaicius){
    if($skaicius < 10 || $skaicius > 90 ){
        $atsakymas = 0;
    }else{
        $atsakymas = $skaicius;
    }
    return $atsakymas;
}
function averageBetween10and90($pirmas,$antras,$trecias){
    $average = (isLessThan10orMoreThan90($pirmas)+
    isLessThan10orMoreThan90($antras)+
    isLessThan10orMoreThan90($trecias))/3;
    return intval($average);
}
echo 'pirmas: '.$pirmas.'<br>antras: '.$antras.'<br>trečias: '.$trecias.'<br>';

echo 'Įprastas vidurkis = '.average($pirmas,$antras,$trecias).'<br>';
echo 'Vidurkis tarp 10 ir 90 = '.averageBetween10and90($pirmas,$antras,$trecias).'<br>';

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Uždavinys 10 -------------><p>';
/*Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
Sugeneruokite skaičių nuo 0 iki 300. 
Tai papildomos sekundės. 
Skaičių pridėkite prie jau sugeneruoto laiko. 
Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.*/
$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(0,59);
$pliusLaikasSekundemis = rand(0,300);

function newTime($valandos, $minutes, $sekundes, $pliusLaikasSekundemis){

    $allCurrentSeconds = $valandos*3600 + $minutes*60 + $sekundes;
    $newAllSeconds = $allCurrentSeconds + $pliusLaikasSekundemis;

    $newHour = floor($newAllSeconds/3600);
    $newMinutes = floor(($newAllSeconds - ($newHour*3600))/60);
    $newSeconds = $newAllSeconds -($newMinutes*60) - ($newHour*3600);

    if($newSeconds > 59){
        $newSeconds = 0;
        $newMinutes++;
    }
    $newSeconds = ($newSeconds < 10) ? '0'.$newSeconds : $newSeconds;

    if($newMinutes > 59){
        $newMinutes = 0;
        $newHour++;
    }
    $newMinutes = ($newMinutes < 10) ? '0'.$newMinutes : $newMinutes;

    if($newHour > 23){
        $newHour = 0;
    }
    $newHour = ($newHour < 10) ? '0'.$newHour : $newHour;

    echo '<p style = "color:blue; font-size:20px; font-weight:800">'.$newHour.':'.$newMinutes.':'.$newSeconds.'</p>';
}

echo '<p style = "color:blue; font-size:20px; font-weight:800">'.$valandos.':'.$minutes.':'.$sekundes.'</p>';
echo 'plius visos sekundės = '.$pliusLaikasSekundemis;
newTime($valandos, $minutes, $sekundes, $pliusLaikasSekundemis);

echo '<p style = "color:red; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Papildomas  -------------><p>';

/*Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
Naudoti ciklų ir masyvų NEGALIMA. */

// $n1 = rand(1000,9999);
// $n2 = rand(1000,9999);
// $n3 = rand(1000,9999);
// $n4 = rand(1000,9999);
// $n5 = rand(1000,9999);
// $n6 = rand(1000,9999);

$n1 = 6;
$n2 = 5;
$n3 = 4;
$n4 = 3;
$n5 = 2;
$n6 = 1;

echo $n1.', '.$n2.', '.$n3.', '.$n4.', '.$n5.', '.$n6;
echo '<br>';
function countBigers ($lyginamasis,$kiti2,$kiti3,$kiti4,$kiti5,$kiti6){
    $count = 1;
    if($lyginamasis >$kiti2){
        $count++;
    }
    if($lyginamasis >$kiti3){
        $count++;
    }
    if($lyginamasis >$kiti4){
        $count++;
    }
    if($lyginamasis >$kiti5){
        $count++;
    }
    if($lyginamasis >$kiti6){
        $count++;
    }
    return $count;
}
// function occurrences($numberString, $eilesNumeris, $amountOfBigger){
//     $newNumberArray = [];
//     for($i = 0; $i < strlen($numberString); $i++){
//         $countOccurrences = count_chars($numberString, $eilesNumeris);
//         if( $countOccurrences > 1 ){
//             array_push($newNumberArray, ($amountOfBigger-1));
//             $numberString = str_replace($eilesNumeris,'x',$numberString);
//         }
//             else if( $countOccurrences == 0 ){
//                 array_push($newNumberArray, ($amountOfBigger+1));
//             }
//                 else {
//                     $newNumber = $amountOfBigger;
//                 }
//     }
    
//     return $newNumber;
// }

function fill ($eilesNumeris, $n1,$n2,$n3,$n4,$n5,$n6){
    $count1 = countBigers ($n1,$n2,$n3,$n4,$n5,$n6);
    $count2 = countBigers ($n2,$n1,$n3,$n4,$n5,$n6);
    $count3 = countBigers ($n3,$n1,$n2,$n4,$n5,$n6);
    $count4 = countBigers ($n4,$n1,$n2,$n3,$n5,$n6);
    $count5 = countBigers ($n5,$n1,$n2,$n3,$n4,$n6);
    $count6 = countBigers ($n6,$n1,$n2,$n3,$n4,$n5);

    $sum = $count1 + $count2 + $count3 + $count4 + $count5 + $count6;
    
    // if($sum < 15){
    //     $numberString = $count1.$count2.$count3.$count4.$count5.$count6;
    // }

    if($count1 == $eilesNumeris){
        $box = $n1;
    }
        elseif($count2 == $eilesNumeris){
            $box = $n2;
        }
            elseif($count3 == $eilesNumeris){
                $box = $n3;
            }
                elseif($count4 == $eilesNumeris){
                    $box = $n4;
                }
                    elseif($count5 == $eilesNumeris){
                        $box = $n5;
                    }
                        elseif($count6 == $eilesNumeris){
                            $box = $n6;
                        }
    return $box;
}
$box1 = fill(1, $n1,$n2,$n3,$n4,$n5,$n6);
$box2 = fill(2, $n1,$n2,$n3,$n4,$n5,$n6);
$box3 = fill(3, $n1,$n2,$n3,$n4,$n5,$n6);
$box4 = fill(4, $n1,$n2,$n3,$n4,$n5,$n6);
$box5 = fill(5, $n1,$n2,$n3,$n4,$n5,$n6);
$box6 = fill(6, $n1,$n2,$n3,$n4,$n5,$n6);


echo '<br>'.$box1.',  '.$box2.',  '.$box3.',  '.$box4.',  '.$box5.',  '.$box6;

echo '<p style = "color:red; font-size:15px; font-weight:800">
------------- Pamoka 1 ------------- Papildomas (su dėstytoju) -------------><p>';
$n1 = rand(1000,9999).'a';
$n2 = rand(1000,9999).'b';
$n3 = rand(1000,9999).'c';
$n4 = rand(1000,9999).'d';
$n5 = rand(1000,9999).'e';
$n6 = rand(1000,9999).'f';

echo (int)$n1.', '.(int)$n2.', '.(int)$n3.', '.(int)$n4.', '.(int)$n5.', '.(int)$n6;
echo '<br>';

${'_'.$n1} = 'n1';
${'_'.$n2} = 'n2';
${'_'.$n3} = 'n3';
${'_'.$n4} = 'n4';
${'_'.$n5} = 'n5';
${'_'.$n6} = 'n6';

$atsakymas ='';

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= (int)$max.', ';
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= (int)$max.', ';
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= (int)$max.', ';
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= (int)$max.', ';
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= (int)$max.', ';
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= (int)$max;
$${'_'.$max} = 0;

echo $atsakymas;


echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 1 ---------------><p>';
/*
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus 
(Jonas Jonaitis). Atspausdinti trumpesnį stringą.*/
$name = 'Sean';
$surname = 'Connery';
echo $name.' '.$surname.'<br>';
echo (strlen($name)>strlen($surname)) ? $surname : $name;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 2 ---------------><p>';
/*
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.*/
$name = 'Sean';
$surname = 'Connery';

echo strtoupper($name).' '.strtolower($surname);
echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 3 ---------------><p>';
/*
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės 
kintamųjų raidžių. Jį atspausdinti.*/
$name = 'Sean';
$surname = 'Connery';

$firstLetters = substr($name,0,1).substr($surname,0,1);
echo $firstLetters;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 4 ---------------><p>';
/*
Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir 
pavardės kintamųjų raidžių. Jį atspausdinti.*/
$name = 'Sean';
$surname = 'Connery';

$lastLetters = substr($name,(strlen($name)-3),3).substr($surname,(strlen($surname)-3),3);
echo $lastLetters;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 5 ---------------><p>';
/*
Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) 
pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.*/
$stringas = 'An American in Paris';
$naujasStringas = '';
for($i = 0; $i < strlen($stringas); $i++){
    $raide = substr($stringas,$i,1);
    // echo $raide.'<br>';
    if($raide == 'A' || $raide == 'a'){
        $naujasStringas = $naujasStringas.'*';
    } else{
        $naujasStringas = $naujasStringas.$raide;
    }
}
$naujasStringasSuReplace = str_replace("A","*",$stringas);
$naujasStringasSuReplace = str_replace("a","*",$naujasStringasSuReplace);

echo 'Su If =         '.$naujasStringas.'<br>';
echo 'Su Replace =    '.$naujasStringasSuReplace;


echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 6 ---------------><p>';
/*
Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) 
raides. Rezultatą atspausdinti.*/
$stringas = 'An American in Paris';
$a_skaicius = 0;
for($i = 0; $i < strlen($stringas); $i++){
    $raide = substr($stringas,$i,1);
    if($raide == 'A' || $raide == 'a'){
        $a_skaicius++;
    }
}
echo 'viso stringe '.$stringas.' yra a: '.$a_skaicius;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 7 ---------------><p>';
/*
Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. 
Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
“2001: A Space Odyssey” ir “It's a Wonderful Life”.*/

$stringas1 = 'An American in Paris';
$stringas2 = "Breakfast at Tiffany's";
$stringas3 = '2001: A Space Odyssey';
$stringas4 = 'Its a Wonderful Life';

echo str_replace(['A','a','E','e','I','i','U','u','O','o','Y','y'], '',$stringas1).'<br>';
echo str_replace(['A','a','E','e','I','i','U','u','O','o','Y','y'], '',$stringas2).'<br>';
echo str_replace(['A','a','E','e','I','i','U','u','O','o','Y','y'], '',$stringas3).'<br>';
echo str_replace(['A','a','E','e','I','i','U','u','O','o','Y','y'], '',$stringas4).'<br>';


echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 8 ---------------><p>';
/*
Stringe, kurį generuoja toks kodas: 
'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.*/
$starsWarsString = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$starsWarsStringWithoutSpaces =  str_replace(" ","",$starsWarsString);
$episodeNo = substr($starsWarsStringWithoutSpaces,16,1);
echo $starsWarsString;
echo '<br>Episode No: ';
echo $episodeNo;


echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 9 ---------------><p>';
/*
Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu 
“Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.*/
$string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

function countShorterWords($string){
    $sentence = str_replace(",","",$string);
    $words = explode(" ", $sentence);
    $count = 0;
    for($i = 0; $i < count($words); $i++){
        if(mb_strlen($words[$i]) <= 5){
            $count++;
        }
    }
    return $count;
}
echo $string1.'&nbsp&nbsp žodžių su 5 ar mažiau raidžių yra: '.countShorterWords($string1);
echo '<br>';
echo $string2.'&nbsp&nbsp&nbsp&nbsp žodžių su 5 ar mažiau raidžių yra: '.countShorterWords($string2);

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 2 ------------- Uždavinys 10 -------------><p>';
/*
Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. 
Stringo ilgis 3 simboliai.*/

function randomLetterWord($stringLenght){
    $letter = 'abcdefghijklmnopqrstuvwxyz';
    $newWord = '';
    for($i = 0; $i < $stringLenght; $i++ ){
        $newWord.= $letter{rand(0,25)};
    }
    return $newWord;
}
echo randomLetterWord(8);


echo '<p style = "color:red; font-size:15px; font-weight:800">
------------- Pamoka 2 -------------- Papildomas --------------><p>';
/*
Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. (reikės masyvo)
 */
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

// $string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
// $string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

// $stringArray = explode(' ',str_replace(',', '', $string1));
// $string2Array = explode(' ',str_replace(',', '', $string2));

// foreach($string2Array as $word)
//     array_push($stringArray,$word);

$string = '';
$z = 0;
while ($z <= 1000000) {
    $string .= ' '.$z;
    $z++;
}

$stringArray = explode(' ', $string);
$kartojimai = 10000;
$masyvoIlgis = count($stringArray)-1;
$elementai = 100;

$time_start = microtime_float();
$a = 0;
while ($a <= $kartojimai) {
    $array = [];
        for($i = 0; $i < $elementai; $i++){
            array_push($array,$stringArray[rand(0,(count($stringArray)-1))]);
        }
        $a++;
    }
$time_end = microtime_float();
echo ($time_end - $time_start);


echo '<br>';


$time_start = microtime_float();
$a = 0;
while ($a <= $kartojimai) {
    $array2 = [];
        for($i = 0; $i < $elementai; $i++){
            array_push($array2,$stringArray[rand(0,$masyvoIlgis)]);
        }
    $a++;
}
$time_end = microtime_float();
echo ($time_end - $time_start);


echo '<br>';


$time_start = microtime_float();
$a = 0;
while ($a <= $kartojimai) {
    $array2 = [];
        for($i = 0; $i < $elementai; $i++){
            array_push($array2,$stringArray[rand(0,$masyvoIlgis)]);
        }
    $a++;
}
$time_end = microtime_float();
echo ($time_end - $time_start);





