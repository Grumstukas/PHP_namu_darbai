<?php
session_start();
include __DIR__ . '/hello_my_db.php';

echo '<div style="font-size: 20px; font-weight: 800; margin: 20px;">
 Sveiki '.$_SESSION['client_name'].' '.$_SESSION['client_surname'].' jūsų sąskaitoje šiuo metu yra '.$_SESSION['client_balance'].'
 <br> pasirinkite pinigų sumą kuri bus nuskaityta iš jūsų sąskaitos</div>';

if (!empty($_POST)) {
    $difference = ($_SESSION['client_balance'] - $_POST['amount']);
    if ($difference >= 0) {

    $stmt = $pdo->prepare('UPDATE b_clients SET amount = amount - ? WHERE id = ?');

    $stmt->execute([$_POST['amount'], $_SESSION['client_id']]);

    header('Location: http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/index.php');/*po posto reikia puslapį persiųsti */
    die(); //naršykle daugiau kieko negaus - tegu eina dirbti
    }
    else
    {
        echo '<div>Apgailestaujame, sąskaistoje neužtenka pinigų<br>
                arba bandykite išleisti mažesnę sumą<br>
                arba grįžkite į banko priimamajį</div>
<button><a href="http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/index.php" style="text-decoration: none; color: black;"> Grįžti atgal</a></button>';
    }
}

?>

<form action="" method="POST">
    Suma:<br>
    <input type="number" name="amount">
    <br><br>
    <input type="submit" value="Submit">
</form>