<?php
echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Strings ------------- strlen() ---------------><p>';
/*https://www.php.net/manual/en/ref.strings.php */
/*skaičiuoja bitus, tačiau kitu kalbu raides užima daugiau bitų !!! */

echo 'labas = '.strlen('labas').'<br>';
echo 'kū-kū = '.strlen('kū-kū').'<br>';
echo 'kūkū = '.strlen('kūkū').'<br>';
echo 'ku-ku = '.strlen('ku-ku');



echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Strings ------------- mb_strlen() ---------------><p>';
/*https://www.php.net/manual/en/book.mbstring.php */

echo 'kū-kū = '.mb_strlen('kū-kū').'<br>';
echo 'kūkū = '.mb_strlen('kūkū').'<br>';
echo 'ku-ku = '.mb_strlen('ku-ku').'<br>';



echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Strings ------------- str_replace() ---------------><p>';
echo str_replace('-', '+', 'labas-tadas-maras').'<br>';
echo str_replace(['-','_'], '+', 'labas-tadas-maras_antanas_baranas').'<br>';
echo str_replace(['-','_'], ['+','*'], 'labas-tadas-maras_antanas_baranas').'<br>';
echo preg_replace('/^\-/', '+', '-labas-tadas-maras').'<br>';


echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Strings ------------- $xxx{i} ---------------><p>';
$labas = 'labas';
echo $labas{2};



echo '<p style = "color:blue; font-size:15px; font-weight:800">
------------- Strings ------------- substr() ---------------><p>';

echo 'abcdef'.'<br>';
echo substr("abcdef", -1).'<br>'; 
echo substr("abcdef", -2).'<br>';
echo substr("abcdef", -3, 1).'<br>';
echo substr('abcdef', 1).'<br>';
echo substr('abcdef', 1, 3).'<br>';
echo substr('abcdef', 0, 4).'<br>';
echo substr('abcdef', 0, 8).'<br>';
echo substr('abcdef', -1, 1).'<br>';

/**
 * regex
 * \d - visi visi skaiciai
 * \d\d - du skaitmenys vienas po kito
 * \d{2}  - du skaitmenys vienas po kito
 * \d+ - bent vienas skaitmuo
 * \d* - nulis, arba daugiau skaitmenu
 * \d? - nulis arba vienas skaitmenu
 * \d+? - po viena skaitmeni, 
 * [a-z] - visos raides;
 * [a-z]+ - visa raidziu grupe;
 * [abcd]+ - nesvarbu koks eiliskumas, bet imu ta grupe kurioje is eiles yra sios raides;
 * (abcd)+ - kai tvarka - svarbi 
 * 
 * [A-Z]{3}\-\d{3,6} - atpazysta automobilio numeri
 * ^\+37[012]\d{8} - lt, lv ir dar ka=kokio numerio validavimas;
 * datos validavimas nuo 1900-2100
 * (([1][9][0-9]{2})|([2][0][0-9]{2})|([2][1][0]{2}))\-((([0][(1|3|5|7|8)])|([1][(0|2)]))\-([0][1-9]|[1][0-9]|[2][0-9]|[3][(0|1)]))|([0][2]\-([0][1-9]|[1][0-9]|[2][0-9]))|(([0][(4|6|9)])|([1][1])\-([0][1-9]|[1][0-9]|[2][0-9]|[3][0]))
 */
?>