<?php

/* http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis2.php */

echo '<p style = "width: 100%; color:blue; font-size:15px; font-weight:800">
--- Pamoka 6 ---  Uždavinys 2 ---Parašykite skriptą, 
kuris generuotų puslapį su trim nuorodom (linkais). 
Paspaudus ant pirmo linko puslapyje parodytų atsitiktinį skaičių nuo 1 iki 50, paspaudus antrą- nuo 51 iki 100, trečią- nuo 101 iki 150. 
Naudokite tik vieną failą ir metodą POST ----------><p>';
?>

<a href="?b=pirmas">atsitiktinis skaičius nuo 1 iki 50</a>
<a href="?b=antras">atsitiktinis skaičius nuo 51 iki 100</a>
<a href="?b=trecias">atsitiktinis skaičius nuo 101 iki 150</a>

<?php

$b = $_POST['b'] ?? 'bloga nuoroda';

if($b == 'pirmas'){
  echo '<br> atsitiktinis skaičius nuo 1 iki 50: '.rand(1,50);
}elseif($b == 'antras'){
  echo '<br> atsitiktinis skaičius nuo 51 iki 100: '.rand(51,100);
}elseif($b == 'trecias'){
  echo '<br> atsitiktinis skaičius nuo 101 iki 150: '.rand(101,150);
}