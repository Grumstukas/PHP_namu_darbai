<a href="?q=dramblys">Duok dramblį</a>
<a href="?q=kengura">Duok kengura</a>

<form action="">    <!-- adresas kuriuo bus siunčiama forma.. jei tuščia - siųs į ta patį kailą kuriame forma yra
defoltu siunčia į GET --> 
  First name:<br>
  <input type="text" name="firstname" value="Mickey"> <!-- name labai svarbu -->
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<form action="" method="POST">    <!-- adresas kuriuo bus siunčiama forma.. jei tuščia - siųs į ta patį kailą kuriame forma yra
defoltu siunčia į GET --> 
  First name:<br>
  <input type="text" name="firstname" value="Mickey"> <!-- name labai svarbu -->
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 


<?php

/*http://localhost/_pamoka1/PHP_namu_darbai/duomenys.php?q=jautis&start=lalala */

$q = $_GET['q'] ?? 'nera karves'; 
$start = $_GET['start'] ?? 'nera starto';  // ?? = jeigu kintamojo NĖRA tai imsiu tai kas už klaustuko
/*http://localhost/_pamoka1/PHP_namu_darbai/duomenys.php?q=jautis */

$firstname = $_GET['firstname'] ?? 'nera karves'; 
$lastname = $_GET['lastname'] ?? 'nera starto';

echo '<br> GET masyvo informacija <br>';
_dc($_GET);

echo $q;
echo '<br>';
echo $start;
echo '<br>';
echo $firstname;
echo '<br>';
echo $lastname;

//kai siunciama per POSTA:
echo '<br> POST masyvo informacija <br>';
_dc($_POST);

//uzdaviniai:

echo '<p style = "color:blue; font-size:20px; font-weight:800">
------ Pamoka 6 ------------- sumatorius -------------><p>';
?>

<form action="">
  X:
  <input type="text" name="X">
  <br>
  Y:
  <input type="text" name="Y">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<?php



if(!empty($_GET)){

    $X = (float)$_GET['X'];
    $Y = (float)$_GET['Y'];

    echo ($X+$Y);
}



echo '<p style = "color:blue; font-size:20px; font-weight:800">
------ Pamoka 6 ------------- elnias -------------><p>';
?>
<img src="Dortmund-Zoo-IMG_5518-a2.jpg" style = "width :100px;>
<form action="">

  <input type="radio" name="gender" value="elnias"> Elnias<br>
  <input type="radio" name="gender" value="suo"> Suo <br>
  <input type="radio" name="gender" value="katinas"> Katinas <br>
  <input type="radio" name="gender" value="begemotas"> begemotas <br>

  <input type="submit" value="Submit">
</form> 

<?php

if(!empty($_GET)){
    $gender = $_GET['gender'] ?? 'gyvunas';
    if($gender == "elnias"){
        echo '<p style = "color:green; ">Jūsų atsakymas teisingas! </p>';
    } else {
        echo '<p style = "color:red; ">Jūsų atsakymas neteisingas! </p>';
    }
}

echo '<p style = "color:blue; font-size:20px; font-weight:800">
------ Pamoka 6 ------------- apklausa -------------><p>';
$teisingi_atsakymai = 0;
?>


<div>

  <div style="width: 100px; margin: 0 20px; display: inline-block; float: left;">
    <img src="Dortmund-Zoo-IMG_5518-a2.jpg" alt="logo" style = "width: 95px; height :95px; display: inline-block; float: left";>
    <img src="suo2.jpg" alt="logo" style = "width: 95px; height :95px; display: inline-block; float: left";>
    <img src="cat.png" alt="logo" style = "width: 95px; height :95px; display: inline-block; float: left";>
    <img src="hipo.jpg" alt="logo" style = "width: 95px; height :95px; display: inline-block; float: left";>
  </div>

  <div style="width: 100px; height: 450px; display: inline-block; float: left;">
    <form action="">
      <input type="radio" name="elnias" value="Elnias"> Elnias<br>
      <input type="radio" name="elnias" value="Šuo"> Suo <br>
      <input type="radio" name="elnias" value="Katinas"> Katinas <br>
      <input type="radio" name="elnias" value="Begemotas"> begemotas <br><br>

      <input type="radio" name="suo" value="Elnias"> Elnias<br>
      <input type="radio" name="suo" value="Šuo"> Suo <br>
      <input type="radio" name="suo" value="Katinas"> Katinas <br>
      <input type="radio" name="suo" value="Begemotas"> begemotas <br><br>

      <input type="radio" name="kate" value="Elnias"> Elnias<br>
      <input type="radio" name="kate" value="Šuo"> Suo <br>
      <input type="radio" name="kate" value="Katė"> Katinas <br>
      <input type="radio" name="kate" value="Begemotas"> begemotas <br><br>

      <input type="radio" name="begemotas" value="Elnias"> Elnias<br>
      <input type="radio" name="begemotas" value="Šuo"> Suo <br>
      <input type="radio" name="begemotas" value="Katinas"> Katinas <br>
      <input type="radio" name="begemotas" value="Begemotas"> begemotas <br><br>

      <input type="submit" value="Submit">
    </form> 
  </div>
</div>

<?php
if(!empty($_GET)){
  echo '<div style="width: 100px; height: 450px; display: inline-block; float: left;">';
    $elnias = $_GET['elnias'] ?? 'gyvunas';
      if($elnias == "Elnias"){
          $teisingi_atsakymai++;
          echo '<div style="color: green; width: 150px; height: 95px; margin: 0 20px; display: inline-block; float: left;"> Tai yra elnias!</div>';
      }else{
        echo '<div style="color: red; width: 150px; height: 95px; margin: 0 20px; display: inline-block; float: left;"> Tai nėra '.$elnias.'!</div>';
      }
    $suo = $_GET['suo'] ?? 'gyvunas';
      if($suo == "Šuo"){
          $teisingi_atsakymai++;
          echo '<div style="color: green; width: 150px; height: 95px; margin: 0 20px; display: inline-block; float: left;"> Tai yra Šuo!</div>';
      }else{
        echo '<div style="color: red; width: 150px; height: 95px; margin: 0 20px; display: inline-block; float: left;"> Tai nėra '.$suo.'!</div>';
      }
    $kate = $_GET['kate'] ?? 'gyvunas';
      if($kate == "Katė"){
          $teisingi_atsakymai++;
          echo '<div style="color: green; width: 150px; height: 95px; margin: 0 20px; display: inline-block; float: left;"> Tai yra Katė!</div>';
      }else{
        echo '<div style="color: red; width: 150px; height: 95px; margin: 0 20px; display: inline-block; float: left;"> Tai nėra '.$kate.'!</div>';
      }
    $begemotas = $_GET['begemotas'] ?? 'gyvunas';
      if($begemotas == "Begemotas"){
          $teisingi_atsakymai++;
          echo '<div style="color: green; width: 150px; height: 95px; margin: 0 20px; display: inline-block; float: left;"> Tai yra Begemotas!</div>';
      }else{
        echo '<div style="color: red; width: 150px; height: 95px; margin: 0 20px; display: inline-block; float: left;"> Tai nėra '.$begemotas.'!</div>';
      }

    $procent = ($teisingi_atsakymai*25);
    
    echo '<div style="color: blue; width: 150px; margin: 0 20px; display: inline-block; float: left;"> iš 4 klausimų atsakėte teisingai į:'.$teisingi_atsakymai.'<br> ir surinkote '.$procent.' % </div>' ;
    echo '</div>';
}







