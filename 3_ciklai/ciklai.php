<?php
echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Loops ------------- break ---------------><p>';
$i = 0;
while(true){
    $i++;
    echo "$i, ";
    if($i > 10){
        break;
    }
}

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Loops ------------- continue ---------------><p>';

$i = 0;
while(true){
    $i++;
    if($i%2 == 0){
        continue;
    }
    echo "$i, ";
    if($i > 10){
        break;
    }
}

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 1 -------------><p>';
/*Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
 */
$countStars = 1;
echo '<p style = "word-break: break-all;">';
while ($countStars < 401) {
    if($countStars % 50 == 0){
        echo '*<br>';
    }else{
        echo '*';
    }
    $countStars++;
}
echo '</p>';


echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 2 -------------><p>';
/*Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir 
suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos. */

$countNumbers = 0;
$bigerThan150 = 0;
while ($countNumbers < 300){
    $randomNumber = rand(0,300);
        if ($randomNumber > 275){
            echo '<span style = "color:red;font-weight:800">'.$randomNumber.'</span>'.', ';
            $bigerThan150++;
        }
            elseif($randomNumber > 150){
                echo $randomNumber.', ';
                $bigerThan150++;
            }
            else{
                echo $randomNumber.', ';
            }
    $countNumbers++;
}
    echo '<br><br>didesnių už 150 yra: '.$bigerThan150;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 3 -------------><p>';
/*Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki 3000, kurie dalijasi iš 77 be liekanos. 
Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, 
kad visi rezultatai matytųsi ekrane. */

$goodNumbers = [];

for($i = 1; $i <=3000; $i++){
    if($i % 77 == 0){
        array_push($goodNumbers, $i);
    }
}
$string = '';
for($a = 0; $a < count($goodNumbers); $a++){
    if($a != count($goodNumbers)-1){
        $string .= $goodNumbers[$a].', ';
    }else{
        $string .= $goodNumbers[$a];
    }
}
echo $string;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 4-5 -------------><p>';
/*Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. 
Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis. 
Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.*/

// **************************************************

// for($y = 0; $y < 100; $y++){
//     for($x = 0; $x < 100; $x++){
//         echo '*';
//         $x++;
//     }
//     echo '<br>';
//     $y++;
// }

$countStars = 1;
$red = 1;
$otherRed = 100;
// echo '<p style = "word-break: break-all; line-height: 7px; letter-spacing: 0px;">';
while ($countStars < (10001)) {
    if($countStars % 100 == 0){
        if($countStars == $red ){
            echo '<span style = "color:red; word-break: break-all; line-height: 7px; letter-spacing: 0px; font-weight:800;">*</span><br>';
            $red +=101; 
        }
        elseif($countStars == $otherRed ){
            echo '<span style = "color:red; word-break: break-all; line-height: 7px; letter-spacing: 0px; font-weight:800;">*</span><br>';
            $otherRed +=99; 
        }
        else{
            echo '<span style = "word-break: break-all; line-height: 7px; letter-spacing: 0px;">*</span><br>';
        }
    }else{
        if($countStars == $red){
            echo '<span style = "color:red; word-break: break-all; line-height: 7px; letter-spacing: 0px; font-weight:800;">*</span>';
            $red +=101; 
        }
        elseif($countStars == $otherRed ){
            echo '<span style = "color:red; word-break: break-all; line-height: 7px; letter-spacing: 0px; font-weight:800;">*</span>';
            $otherRed +=99; 
        }
        else{
            echo '<span style = "word-break: break-all; line-height: 7px; letter-spacing: 0px;">*</span>';
        }
    }
    $countStars++;
}
echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 6 -(Iškritus herbui)------------><p>';
/*Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
Suprogramuokite keturis??? skirtingus scenarijus kai monetos metimą stabdome:
    Iškritus herbui;
    Tris kartus iškritus herbui;
    Tris kartus iš eilės iškritus herbui; */

$stringCoin = '';
$sh = 0;
    do{
        $sh = rand(0,1);
        $stringCoin = ($sh > 0) ? 'S' : 'H';
        echo $stringCoin.' ';
        if($stringCoin == 'H'){
            break;
        }
    }while(true);

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 6 -(Tris kartus iškritus herbui)------------><p>';

$stringCoin = '';
$sh = 0;
$hcount = 0;
    do{
        $sh = rand(0,1);
        $stringCoin = ($sh > 0) ? 'S' : 'H';
        echo $stringCoin.' ';
        if(($stringCoin == 'H') && ($hcount<2)){
            $hcount++;
        }
        elseif(($stringCoin == 'H') && ($hcount=2)){
            break;
        }
    }while(true);

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 6 -(Tris kartus iš eilės iškritus herbui)------------><p>';

$stringCoin = '';
$sh = 0;
$hcount = 0;
    do{
        $sh = rand(0,1);
        $stringCoin = ($sh > 0) ? 'S' : 'H';
        echo $stringCoin.' ';
        if($stringCoin == 'S'){
            $hcount = 0;
        }
        if(($stringCoin == 'H') && ($hcount<2)){
            $hcount++;
        }
        elseif(($stringCoin == 'H') && ($hcount=2)){
            break;
        }
    }while(true);

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 7 -------------><p>';
/*Kazys ir Petras žaidžiai šaškėm. 
Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. 
Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. 
Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. */

$petras = 0;
$kazys = 0;

    do{
        $petras += rand(10,20);
        $kazys += rand(5,25);

        if(($petras>=222)||($kazys>=222)){
            break;
        }
    }while(true);

    if ($petras > $kazys){
        echo 'laimėjo Petras ! skirtumu '.$petras.':'.$kazys;
    }
        elseif ($petras < $kazys){
            echo 'laimėjo Kazys ! skirtumu '.$kazys.':'.$petras;
        }
            else{
                echo 'Lygiosios, nei Petras nei Kazys - nelaimėjo :)';
            }


echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops -(1 ciklas)--------- Uždavinys 8 -------------><p>';
/*Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
(https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. 
Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis). */
$romboKrastineIlgis = 21;                                   
$cikloIlgis = $romboKrastineIlgis*$romboKrastineIlgis;      
$start = ($romboKrastineIlgis-1)/2;                         
$viduriukas = (($romboKrastineIlgis-1)/2)+1;                
$width = 1;                                                
$lineCount = 1;
$eilutesGalas = $romboKrastineIlgis-1;                      
$balta = '<span style = "color: white; word-break: break-all; line-height: 7px; letter-spacing: 0px;">*</span>';

for($y = 0; $y < $cikloIlgis; $y++){

    if(($y > $start-1) && ($y < $start+$width)){
        echo '<span style = "color: rgb('.rand(0,255).', '.rand(0,255).', '.rand(0,255).'); 
        word-break: break-all; line-height: 7px; letter-spacing: 0px;font-weight:800;">*</span>';
    }
    else{
        echo $balta;
    }

    if($y == $eilutesGalas){
        echo '<br>';
        $lineCount++;
        $eilutesGalas += $romboKrastineIlgis;
        if($lineCount <= $viduriukas){
            $width += 2;
            $start += ($romboKrastineIlgis - 1);
        }else{
            $width -= 2;
            $start += ($romboKrastineIlgis + 1);
        }
    }
}
echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops -(2 ciklai)--------- Uždavinys 8 -------------><p>';
/*Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
(https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. 
Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis). */

$romboKrastineIlgis = 21;

$start = ($romboKrastineIlgis-1)/2;
$cikloIlgis = $romboKrastineIlgis+2;
$viduriukas = (($romboKrastineIlgis-1)/2)+1;
$width = 1;
$lineCount = 0;

for($y = 0; $y < $cikloIlgis; $y++){
    for($x = 0; $x < $cikloIlgis; $x++){
        if(($x > $start-1) && ($x < $start+$width)){
            echo '<span style = "color: rgb('.rand(0,255).', '.rand(0,255).', '.rand(0,255).'); 
            word-break: break-all; line-height: 7px; letter-spacing: 0px;font-weight:800;">*</span>';
        }else{
            echo '<span style = "color: white; word-break: break-all; line-height: 7px; letter-spacing: 0px;">*</span>';
        }
    }
    echo '<br>';
    $lineCount++;
    if($lineCount < $viduriukas){
        $width += 2;
        $start -= 1;
    }else{
        $width -= 2;
        $start += 1;
    }
    
}


echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 9 -------------><p>';
/*Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
$c = "10 bezdzioniu suvalge 20 bananu.";
Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
$c = '10 bezdzioniu suvalge 20 bananu.';
(Stringas viengubose ir dvigubose kabutėse) */

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$a = 0;
$time_start = microtime_float();
    while($a < 1000000){
        $c = "10 bezdzioniu suvalge 20 bananu.";
        $a++;
    }
    
$time_end = microtime_float();
$time1 = ($time_end - $time_start)*1000;

$a = 0;
$time_start = microtime_float();
    while($a < 1000000){
        $c = '10 bezdzioniu suvalge 20 bananu.';
        $a++;
    }
    
$time_end = microtime_float();
$time2 = ($time_end - $time_start)*1000;

echo 'Su  dvigubom kabutem bezdžionės milijoną bananų valgo '.$time1.' ms<br>';
echo 'Su viengubom kabutem bezdžionės milijoną bananų valgo '.$time2.' ms';

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 10 (kala taiklus) -------------><p>';
/*Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
    “Įkalkite” 5 vinis mažais smūgiais. 
        Vienas smūgis vinį įkala 5-20 mm. 
        Suskaičiuokite kiek reikia smūgių.*/
$gylis = rand(10,85);
$ikalimoGylis = 0;
$ikaltaViniu = 0;
$smugiuKiekisViso = 0;
$smugiuKiekisVienaiViniai = 0;
echo 'Vinis įkalama '.$gylis.'mm į sieną.';
    do{
        if($ikalimoGylis < $gylis){
            $smugis = rand(5,20);
            $ikalimoGylis += $smugis;
            $smugiuKiekisViso++;
            $smugiuKiekisVienaiViniai++;
        }elseif($ikalimoGylis >= $gylis){
            echo '<br> Viniai '.($ikaltaViniu+1).' prireike smugių : '.$smugiuKiekisVienaiViniai;
            $ikalimoGylis = 0;
            $smugiuKiekisVienaiViniai = 0;
            $ikaltaViniu++;
        }
    }while($ikaltaViniu<5);

echo '<br> įkalta vinių : '.$ikaltaViniu;
echo '<br> prireike smugių : '.$smugiuKiekisViso;

echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Uždavinys 10 (kala klišas) -------------><p>';
/*  “Įkalkite” 5 vinis dideliais smūgiais. 
        Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), 
        kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių. */
$gylis = rand(10,85);
$ikalimoGylis = 0;
$ikaltaViniu = 0;
$smugiuKiekisViso = 0;
$smugiuKiekisVienaiViniai = 0;
$arPataike = 0;
$pataike = 0;
$nepataike = 0;
echo 'Vinis įkalama '.$gylis.'mm į sieną.';
    do{
        $arPataike = rand(0,1);
        if($arPataike > 0){
            if($ikalimoGylis < $gylis){
                $smugis = rand(20,30);
                $ikalimoGylis += $smugis;
                $pataike++;
                $smugiuKiekisViso++;
                $smugiuKiekisVienaiViniai++;
            }elseif($ikalimoGylis >= $gylis){
                echo '<br> Viniai '.($ikaltaViniu+1).' prireike smugių : '.$smugiuKiekisVienaiViniai.' nepataikė : '.$nepataike.' kartų :)';
                $ikalimoGylis = 0;
                $smugiuKiekisVienaiViniai = 0;
                $pataike = 0;
                $nepataike = 0;
                $ikaltaViniu++;
            }
        }elseif($arPataike == 0){
            $smugiuKiekisViso++;
            $smugiuKiekisVienaiViniai++;
            $nepataike++;
        }
    }while($ikaltaViniu<5);

echo '<br> įkalta vinių : '.$ikaltaViniu;
echo '<br> prireike smugių : '.$smugiuKiekisViso;

echo '<p style = "color:red; font-size:15px; font-weight:800">
------------- Pamoka 3 --- Loops ---------- Papildomas -------------><p>';
/*Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. 
Skaičiai turi būti unikalūs (t.y. nesikartoti). 
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). 
Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio. */

$allNumbers = [];
$string = '';
while(count($allNumbers)<50){
    $random = rand(1,200);
    if(in_array($random,$allNumbers) == false){
        array_push($allNumbers, $random);
        $string .= $random.' ';
    }
}
echo 'Unikalūs skaičiai: <br>'.$string.'<br>';

$newString = '';
sort($allNumbers);
$primes = isPrime ($allNumbers);
for($i = 0; $i < count($primes)-1; $i++){
    $newString .= $primes[$i].' ';
}
echo 'Tik pirminiai didėjimo tvarka: <br>'.$newString.'<br>';

function isPrime ($allNumbers){
    $primes = [];
    for($i = 0; $i < count($allNumbers)-1; $i++){
        if(($allNumbers[$i] == 1) || ($allNumbers[$i] == 2) || ($allNumbers[$i] == 3) ){
            array_push($primes, $allNumbers[$i]);
        } 
            elseif(($allNumbers[$i] % 2 != 0) && ($allNumbers[$i] % 3 != 0) && ($allNumbers[$i] % 5 != 0) && ($allNumbers[$i] % 7 != 0)){
                array_push($primes, $allNumbers[$i]);
            }
    }
    return $primes;
}





    