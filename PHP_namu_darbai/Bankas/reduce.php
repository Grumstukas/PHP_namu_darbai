<?php
session_start();
include __DIR__ . '/hello_my_db.php';

echo '<div style="font-size: 20px; font-weight: 800; margin: 20px;">
 Sveiki ' . $_SESSION['client_name'] . ' ' . $_SESSION['client_surname'] . ' jūsų sąskaitoje šiuo metu yra ' . $_SESSION['client_balance'] . '
 <br> pasirinkite pinigų sumą kuri bus nuskaityta iš jūsų sąskaitos</div>';

if (!empty($_POST))
{
    $difference = ($_SESSION['client_balance'] - $_POST['amount']);
    if ($difference >= 0)
    {

        $stmt = $pdo->query("
        SELECT
         t1.id as client_id,
         t1.name,
         t1.surname,
         t2.amount,
         t2.acc_number,
         t2.id as acountID
         FROM b_clients t1
        INNER JOIN  b_accounts t2
        ON t1.id = t2.client_id
        ORDER BY t1.id;
        ");


        $stmt = $pdo->prepare('UPDATE b_accounts SET amount = amount - ? WHERE acc_number = ?');

        $stmt->execute([$_POST['amount'], $_SESSION['acc_number']]);

        header('Location: ' . $localHostAdress . 'index.php');/*po posto reikia puslapį persiųsti */
        die(); //naršykle daugiau kieko negaus - tegu eina dirbti
    }
    else
    {
        echo '<div>Apgailestaujame, sąskaistoje neužtenka pinigų<br>
                arba bandykite išleisti mažesnę sumą<br>
                arba grįžkite į banko priimamajį</div>
<button><a href="' . $localHostAdress . 'index.php" style="text-decoration: none; color: black;"> Grįžti atgal</a></button>';
    }
}

?>

<form action="" method="POST">
    Suma:<br>
    <input type="number" name="amount">
    <br><br>
    <input type="submit" value="Submit">
</form>