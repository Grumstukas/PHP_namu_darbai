<?php

/* http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis7.php */

echo '<p style = "width: 100%; color:blue; font-size:15px; font-weight:800">--- Pamoka 6 ---  Uždavinys 8 ---

Parašykite skriptą, kuris generuotų puslapį  su tokia forma: <br>
    Įvedimo laukeliai:<br>
    Mašinos markė<br>
    Valstybinis numeris<br>
    Pagaminimo metai<br>
    Suprogramuokite įvedamos informacijos tikrinimą serverio pusėje pagal taisykles:<br>
    Mašinos markė leidžiami skaičiai ir raidės;<br>
    Valstybinis numeris formatu ABC-123;<br>
    Pagaminimo metai formatu 2013.<br>

    Padarykite taip, kad įvedus informaciją netinkamu formatu laukelio rėmai pakeistų spalvą į raudoną ir 
    įvesta informacija iš laukelių neišnyktų ir pasiliktų vartotojo suvesti duomenys.
    
  ----------><p>';
session_start();
    if(!empty($_POST)){
        echo preg_match('/[A-Z]{3}-[0-9]{3}/m', $_POST['numeris']);
        if(($_POST['marke'] == '') || (!preg_match('/[A-Za-z]{1,100}/m', $_POST['marke']))) {
            $_SESSION['markeColor'] = 'red';
            
        }
        if(($_POST['numeris'] == '') || (!preg_match('/[A-Z]{3}-[0-9]{3}/m', $_POST['numeris']))) {
            $_SESSION['numerisColor'] = 'red';
            
        }
        if(($_POST['metai'] == '') || (!preg_match('/[2][0][0-1][0-9]/m', $_POST['metai']))) {
            $_SESSION['metaiColor'] = 'red';
            
        }
        $_SESSION['marke'] = $_POST['marke'];
        $_SESSION['numeris'] = $_POST['numeris'];
        $_SESSION['metai'] = $_POST['metai'];

        header('Location: http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/duomenys/nd6_uzduotis8.php');/*po posto reikia puslapį persiųsti */
        die(); //naršykle daugiau kieko negaus - tegu eina dirbti
    }
?>

<form action="" method="POST">
    Mašinos markė:<br>
    <input type="text" name="marke" style="background-color: <?= $_SESSION['markeColor'] ?? '' ?>" value="<?= $_SESSION['marke'] ?? '' ?>">
    <br>
    Valstybinis numeris:<br>
    <input type="text" name="numeris" style="background-color: <?= $_SESSION['numerisColor'] ?? '' ?>" value="<?= $_SESSION['numeris'] ?? '' ?>">
    <br>
    Pagaminimo metai:<br>
    <input type="text" name="metai" style="background-color: <?= $_SESSION['metaiColor'] ?? '' ?>" value="<?= $_SESSION['metai'] ?? '' ?>">
    <br><br>
    <input type="submit" value="Submit">
</form>
<?php

session_unset();

?>
<!-- $subject = "abcdef";
$pattern = '/^def/';
preg_match('/[A-Z]{1,100}/m', $_POST['numeris']);
print_r($matches); -->