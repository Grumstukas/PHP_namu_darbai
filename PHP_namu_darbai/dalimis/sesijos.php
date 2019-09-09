<?php
/*Sesija ir sesijos duomenys saugomi serveryje! */
session_start(); /* turi būti viršuje :) */
define('DIR', __DIR__);

/*reletyvys kelias:*/
include 'ifas.php';

/*absoliutus kelias iki manęs:*/
_dc(DIR);
//      include DIR.'/ifas.php';/*kelias1*/
     require DIR.'/ifas.php';/*kelias2*//*jeigu neras, barsis ir numirs*/
//      include_once DIR.'/ifas.php';/*kelias3*//*tik vieną - pirmą kartą()*/
//      require_once DIR.'/ifas.php';/*kelias2*//*jeigu neras, barsis ir numirs, ir paršys ti vieną kartą*/


// if(!empty($_POST)){

//     _d($_POST);

//     if(isset($_POST['sum'])){
//         $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['X'] + (float)$_POST['Y']);
//     } elseif (isset($_POST['skir'])){
//         $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['X'] - (float)$_POST['Y']);
//     }
//     $_SESSION['Y'] = (float)$_POST['Y'];
//     $_SESSION['X'] = (float)$_POST['X'];
//     header('Location: http://localhost/_pamoka1/PHP_namu_darbai/sesijos.php');/*po posto reikia puslapį persiųsti */
//     die(); //naršykle daugiau kieko negaus - tegu eina dirbti
// }

//__DIR__ serverio keliui nurodyti
// http:// - clinto pusės keliai

?>

<form action="" method="POST">
  X:
  <input type="text" name="X" value="<?= $_SESSION['X'] ?? '' ?>">
  <br>
  Y:
  <input type="text" name="Y" value="<?= $_SESSION['Y'] ?? '' ?>">
  <br><br>

  <button type="submit" name="sum" value="1">Sumatorius</button>
  <button type="submit" name="skir" value="1">Skirtumatorius</button>
</form> 

<?php

echo $_SESSION['ats'] ?? '';
session_unset();


/*KONSTANTOS*/
define('KONST', 42);
define('KONST_MASYVU', [2,2,2,2]);

/*AR TAI KONSTANTA ?*/
var_dump(defined('KONST'));

echo KONST;
// echo KONST_MASYVU;
echo '<br>';
echo implode(' ',KONST_MASYVU);
?>
