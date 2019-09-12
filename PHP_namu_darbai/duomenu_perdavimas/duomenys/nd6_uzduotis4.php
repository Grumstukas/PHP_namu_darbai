<?php

/* http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis4.php */

echo '<p style = "width: 100%; color:blue; font-size:15px; font-weight:800">
--- Pamoka 6 ---  Uždavinys 4 ---Parašykite skriptą, kuris generuotų puslapį  su tokia forma:
  Įvedimo laukeliai:
  Vardas
  Pavardė
  Asmens kodas
  Mygtukai:
  Ieškoti pagal vardą ir pavardę
  Iškoti pagal asmens kodą
  Paspaudus pirmą mygtuką turėtų būti parodomas pranešimas:
  Paieška pagal vardą ir pavardę ir išvedami vardas ir pavardė
  Paspaudus antrą mygtuką turėtų būti parodomas pranešimas:
  Paieška pagal asmens kodą ir išvedamas kodas
  Jeigu nors vienas laukelis, pagal kurį atliekama paieška yra tuščias, turėtų būti parodomas klaidos pranešimas.
  ----------><p>';

  session_start();

  if(!empty($_POST)){
        if(($_POST['name'] == '') || ($_POST['surname'] == '') || ($_POST['personID'] == '') ){
            $_SESSION['ieskoma'] = '<p style = "width: 100%; color:red;"> Prašome įveskite visus reikiamus duomenis </p>';
        }else{
            $_SESSION['name'] = $_POST['name'] ?? '';
            $_SESSION['surname'] = $_POST['surname']?? '';
            $_SESSION['personID'] = $_POST['personID']?? '';

            if(isset($_POST['byName'])){
                $_SESSION['ieskoma'] = 'Paieška vykdoma pagal '.$_POST['name'].' '.$_POST['surname'];
            } elseif (isset($_POST['byID'])){
                $_SESSION['ieskoma'] = 'Paieška vykdoma pagal '.$_POST['personID']; 
                $_SESSION['logOff'] = '
                    <form action="" method="POST">
                        <button type="submit" name="logOff1" value="1">Atsijungti</button>
                    </form> 
                ';
            }
        }
        $random = $_POST['logOff1'] ?? '';

        if ($random == '1'){
            header('Location: http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis6.php');
            die();
        }
        
      header('Location: http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis4.php');/*po posto reikia puslapį persiųsti */
      die(); //naršykle daugiau kieko negaus - tegu eina dirbti
  
  }

?>

<form action="" method="POST">
  Vardas:<br>
  <input type="text" name="name" pattern="[A-Za-z]{1-255}">
  <br>
  Pavardė:<br>
  <input type="text" name="surname" pattern="[A-Za-z]{1-255}">
  <br>
  Asmens kodas:<br>
  <input type="text" name="personID" pattern="[0-9]{13}">
  <br><br>

  <button type="submit" name="byName" value="1">Paieška pagal vardą</button>
  <button type="submit" name="byID" value="1">Paieška pagal Asmens kodą</button>
</form> 

<?php
echo $_SESSION['ieskoma'] ?? '';
echo $_SESSION['logOff'] ?? '';

// $random = $_POST['logOff1'] ?? '';

// if ($random == '1'){
//     header('Location: http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis6.php');
//     die();
// }
session_unset();