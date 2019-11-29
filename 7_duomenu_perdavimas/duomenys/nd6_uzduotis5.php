<?php
session_start();
/* http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis5.php */

echo '<p style = "width: 100%; color:blue; font-size:15px; font-weight:800">--- Pamoka 6 ---  Uždavinys 5 ---

Padaršykite skriptą, kuris generuotų puslapį su 3 mygtukais, išdėliotais vienoje eilėje. 
Paspaudus mygtuką, būtų išvedamas atsitiktinis skaičius analogiškai kaip pagal 2 uždavinio sąlygą. 
Padarykite taip, kad paspaudus mygtuką, prieš tai buvę sugeneruoti skaičiai (jeigu buvo) neišnyktų.
  --- + įrašymas į failą -------><p>';

  

  if(!empty($_POST)){

    if ($_POST['rand'] == '1'){
      $number = rand(1,50);

      } elseif($_POST['rand'] == '2'){
        $number = rand(51,100);

        } elseif($_POST['rand'] == '3'){
          $number = rand(101,150);
        }
   
    $_SESSION['ats'] .= '<br> atsitiktinis skaičius: '.$number;
    $_SESSION['ats2'][] = $number;
    $iFaila = $number;

    file_put_contents('C:\xampp\htdocs\_pamoka1\PHP_namu_darbai\namu_darbai\duomenys\animals/data.txt', print_r($_SESSION['ats2'],1)); /*dėl 1, ne spausdins o gražins */
    // file_put_contents('C:\xampp\htdocs\_pamoka1\PHP_namu_darbai\namu_darbai\duomenys\animals/data.txt', $_SESSION['ats'])); /*dėl 1, ne spausdins o gražins */

    /*TARPINIS DUOMENŲ ĮRAŠYMO STANDARTAS su JSON
    JSON taisyklė - kaip masyvą paversti į stringą */

    if(file_exists('C:\xampp\htdocs\_pamoka1\PHP_namu_darbai\namu_darbai\duomenys\animals/data2.json')){
      $data = json_decode(file_get_contents('C:\xampp\htdocs\_pamoka1\PHP_namu_darbai\namu_darbai\duomenys\animals/data2.json'));
    }
    else{
      $data = [];
    }
    $data[] = $iFaila;

    file_put_contents('C:\xampp\htdocs\_pamoka1\PHP_namu_darbai\namu_darbai\duomenys\animals/data2.json', json_encode($data)); /*dėl 1, ne spausdins o gražins */



    header('Location: http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis5.php');
    die();
  } 

?>

<form action="" method="POST">
  <button type="submit" name="rand" value="1">atsitiktinis skaičius nuo 1 iki 50</button>
  <button type="submit" name="rand" value="2">atsitiktinis skaičius nuo 51 iki 100</button>
  <button type="submit" name="rand" value="3">atsitiktinis skaičius nuo 101 iki 150</button>
</form>

<?php

if(file_exists('C:\xampp\htdocs\_pamoka1\PHP_namu_darbai\namu_darbai\duomenys\animals/data2.json')){
  _dc(file_get_contents('C:\xampp\htdocs\_pamoka1\PHP_namu_darbai\namu_darbai\duomenys\animals/data2.json'));
  _dc(json_decode(file_get_contents('C:\xampp\htdocs\_pamoka1\PHP_namu_darbai\namu_darbai\duomenys\animals/data2.json')));
}




session_unset();

