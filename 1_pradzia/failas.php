<h1>Labas</h1>

<!-- -------------------------------------------------------------------------------------------- -->

<!-- cia ne tagas !, jo nereikia uzdaryti, jis nurodo vieta nuo kur prasideda php kodas -->
<?php
echo '<h1 style="color: red">Labas</h1>'; // sako spausdinti
?>
<!-- php kodas baigtas JEIGU VISAS KODAS BAIGIASI PHP KODU UŽDARYTI NEBEREIKIA!!!!!!!!!-->

<!-- -------------------------------------------------------------------------------------------- -->

<!-- tas pats kas ir virsuje: -->
<?= 6+5 ?>

<?php

$vienas = 5;
$du = 3;
echo $vienas++; //pridejimas vyksta cia, po kabliataskio
echo $vienas;

echo ++$du;
echo $du;
echo '<br>';
$zodis1 = 'bla bla';
$zodis2 = 'ku ku';
$zodis3 = '1bla bla';
$zodis4 = '1ku ku';
$sakinys = $zodis1.$zodis2;
@$sakinys2 = $zodis3+$zodis4;
$sakinys3 = $zodis3.$zodis4;
echo '<br>';
echo $sakinys;
echo '<br>';
echo $sakinys2;
echo '<br>';
echo $sakinys3;
// jeigu pries veiksmą padėsim @ bus ignoruojamos klaidos

// -------------------------------------------------------------------------------------------- -->
echo '<br>------------------------------------------------------------------------------------- --><br>';
// viengubos ir dvigubos kabutes:
echo '<br>';
$vienas = 'bla bla bla';
$du = "ku $vienas ku";
echo $du;
echo '<br>';
$du = 'ku $vienas ku';
echo $du;
//turetu buti taip:
echo '<br>';
$du = 'ku '.$vienas.' ku';
echo $du;
echo '<br>';

// -------------------------------------------------------------------------------------------- -->
echo '<br>------------------------------------------------------------------------------------- --><br>';
$pirmas = 'antras';
$antras = 'bla bla';
echo $$pirmas;
//kintamojo kintamasis, nes prmas doleris yra lygus antras, antras jau lygu blabla, svarnu kad stringas ir kintamojovardas sutaptu.
echo '<br>------------------------------------------------------------------------------------- --><br>';
$pirmas = 'antras';
$antras = 'trecias';
$trecias = 'bla bla';
echo $$$pirmas;
echo '<br>------------------------------------------------------------------------------------- --><br>';
echo $pirmas, $antras;
print $pirmas;
echo '<br>----print_r-------------------------------------------------------------------------- --><br>';
print_r($pirmas); //labiau skirtas masyvams, echo masyvo nespausdina !!!!
echo '<br>----var_dump------------------------------------------------------------------------- --><br>';
var_dump($pirmas, $antras, false); //duoda kintamuju reiksmes

echo '<br><br>----SĄLYGINIAI SAKINAI----------------------------------------------------------- --><br>';

echo '<br><br>----uzdavinukas apie Joną ir Petrą--------------------------------------------- --><br><br>';

$jonas = rand(5,25);

$petras = rand(10,20);

echo "Jonas: $jonas, Petras: $petras <br>";

if($jonas > $petras){
    echo 'Laimejo Jonas';
} 
    elseif( $jonas < $petras){
        echo 'Laimėjo Petras';
    }
        else {
            echo 'Lygiosios!';
        }

echo '<br><br>----sutrumpinta if sąlyga:------------------------------------------------------ --><br><br>';

$rezultatas = (true) ? 'Yes' : 'No';
echo $rezultatas;

echo '<br>----sutrumpinta if sąlyga sudetingesne -------------- --><br>';

$rezultatasA = (true) ? 'A' : (true) ? 'B' : 'C';
echo '<br>(true) ? A : (true) ? B : C  = '.$rezultatasA;

$rezultatasB = (true) ? 'A' : ((true) ? 'B' : 'C');
echo '<br>((true) ? A : ((true) ? B : C )  = '.$rezultatasB;

$rezultatasC = (false || true ) ? 'B' : 'C';
echo '<br>(false || true ) ? B : C  = '.$rezultatasC;

echo '<br><br>----sutrumpinta if sąlyga sudetingesne:------------------------------------------------------ --><br>';

$rezultatas = (false) ? 'A' : (true) ? 'B' : 'C';
echo $rezultatas;

echo '<br>----sutrumpinta if sąlyga sudetingesne:------------------------------------------------------ --><br>';

$rezultatas = (true) ? 'A' : (false) ? 'B' : 'C';
echo $rezultatas;

echo '<br>----sutrumpinta if sąlyga sudetingesne:------------------------------------------------------ --><br>';

$rezultatas = (false) ? 'A' : (false) ? 'B' : 'C';
echo $rezultatas;

echo '<br><br>----is set ?------------------------------------------------------ --><br><br>';

echo 'rezultatas '.isset ($rezultatas).'<br>';
echo 'bulve '.isset ($bulve);