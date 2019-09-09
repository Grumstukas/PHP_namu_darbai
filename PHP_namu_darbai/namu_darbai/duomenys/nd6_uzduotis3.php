<?php

/* http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis3.php */

echo '<br><br><p style = "width: 100%; color:blue; font-size:15px; font-weight:800">
--- Pamoka 6 ---  Uždavinys 3 ---Parašykite skriptą, kuris generuotų puslapį 
su trim nuorodom (linkais). Paspaudus ant kiekvieno linko turėtų būti rodomas vienas 
iš trijų skirtingų paveiksliukų. Naudokite tik vieną failą ir metodą GET. ----------><p>';
?>

<a href="?c=pirmas">Paveikslėlis A</a><br>
<a href="?c=antras">Paveikslėlis B</a><br>
<a href="?c=trecias">Paveikslėlis C</a><br>

<?php

$c = $_GET['c'] ?? 'bloga nuoroda';

if($c == 'pirmas'){
  echo '<br> <img src="../../paveiksleliai/Dortmund-Zoo-IMG_5518-a2.jpg" alt="logo" style = "width: 95px; height :95px; display: inline-block; float: left";>';
}elseif($c == 'antras'){
  echo '<br> <img src="../../paveiksleliai/suo2.jpg" alt="logo" style = "width: 95px; height :95px; display: inline-block; float: left";>';
}elseif($c == 'trecias'){
  echo '<br> <img src="../../paveiksleliai/cat.png" alt="logo" style = "width: 95px; display: inline-block; float: left";>';
}