<?php
session_start();
/* http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis9.php */
echo '<p style = "width: 100%; color:blue; font-size:15px; font-weight:800">--- Pamoka 6 ---  Uždavinys 9 ---

Suprogramuokite žaidimą. 
Žaidimas prasideda mygtuku “pradėti”. 
Jį paspaudus skriptas sugeneruoja atsitiktinį skaičių nuo 1 iki 6 bet jo neišveda, o vietoj jo parodo laukelį, kuriame žaidėjas rašo savo spėjimą. 
Neatspėjus išvedamas pranešimas “neatspėjote” ir laukelis įrašyti naujam spėjimui. 
Atspėjus skaičių išvedamas pranešimas “atspėjote”, spėjimų skaičius (kiek kartų buvo spėta) ir mygtumas pradėti. 
Įvedimo laukelyje tikrinkite (serverio pusėje), kad įvedamas būtų tik skaičius intervale nuo 1 iki 6. 
Jeigu įvedimas netinkamas, turi būti išvedama informacija su paaiškinimu ir spėjimas neskaičiuojamas.
    
  ----------><p>';
  $random = rand(1,6);
  
    $true = 0;
    $guessCount = 0;

    $guessNumber = $_POST['numeris']??'';
    $enter = $_POST['submit']??'';

    
?>

  <form action="" method="POST">
    <input type="text" name="numeris"></br></br>

    Atsakymas:
    <?php
    

    if($enter){
        if(($guessNumber > 0) && ($guessNumber < 7)){
            if($guessNumber == $random){
                echo ' Atspėjai !';
            }else{
                echo 'Neatspėjai!!!';

            }
        }
    }

    ?>
<br><br>
<button type="submit" name="submit" value="Search"/>Spėk !</button>
<br><br>
</form>