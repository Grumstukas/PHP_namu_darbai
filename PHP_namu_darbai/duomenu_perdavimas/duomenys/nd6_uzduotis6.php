<?php

/* http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis6.php */

echo '<p style = "width: 100%; color:blue; font-size:15px; font-weight:800">--- Pamoka 6 ---  Uždavinys 6 ---

Papildykite 4 uždavinį taip, kad forma būtų galima pasiekti tik “prisijungus” t.y. į atskirą formą suvedus 
prisijungimo “vardą” ir “slaptažodį”. Neprisijungusiems vartotojams turi būti rodoma prisijungimo formą. 
Padarykite linką, kurį paspaudus vartotojas galėtų atsijungti.
  ----------><p>';

  session_start();

  if(!empty($_POST)){
    if(($_POST['name'] == '') || ($_POST['password'] == '') ){
        $_SESSION['serverioAtsakymas'] = '<p style = "width: 100%; color:red;"> Prašome įveskite visus reikiamus duomenis </p>';
    }else{
        $_SESSION['serverioAtsakymas'] = '<p style = "width: 100%; color:blue;"> Sveiki prisijungus!'.$_POST['name'].' </p>';
        echo $_SESSION['serverioAtsakymas'] ?? '';
        session_unset();
        require __DIR__.'/nd6_uzduotis4.php';
    }
    header('Location: http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis6.php');
    die();
  }
?>
<!-- registracija -->
<form action="" method="POST">
  Prisijungimo vardas:<br>
  <input type="text" name="name">
  <br>
  Slaptažodis:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Submit">
</form>