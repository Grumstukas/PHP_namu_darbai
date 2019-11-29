<?php
/*Sesija ir sesijos duomenys saugomi serveryje! */
session_start(); /* turi būti viršuje :) */

if(!empty($_POST)){

    _d($_POST);

    if(isset($_POST['sum'])){
        $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['X'] + (float)$_POST['Y']);
    } elseif (isset($_POST['skir'])){
        $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['X'] - (float)$_POST['Y']);
    }

    $_SESSION['Y'] = (float)$_POST['Y'];
    $_SESSION['X'] = (float)$_POST['X'];
    header('Location: http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/sesijos.php');/*po posto reikia puslapį persiųsti */
    die(); //naršykle daugiau kieko negaus - tegu eina dirbti

}

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

?>