<?php
session_start();
include __DIR__.'/hello_my_db.php';
echo '<div style="font-size: 20px; font-weight: 800; margin: 20px;">
 Sveiki '.$_SESSION['client_name'].' '.$_SESSION['client_surname'].' jūsų sąskaitoje šiuo metu yra '.$_SESSION['client_balance'].'
 <br> pasirinkite pinigų sumą kuri bus pervesta į jūsų sąskaitą</div>';

if(!empty($_POST)){

    $stmt = $pdo->prepare('UPDATE b_clients SET amount = amount + ? WHERE id = ?');

    $stmt->execute([$_POST['amount'], $_SESSION['client_id']]);

    header('Location: '.$localHostAdress.'index.php');/*po posto reikia puslapį persiųsti */
    die(); //naršykle daugiau kieko negaus - tegu eina dirbti
}

?>

<form action="" method="POST">
    Suma:<br>
    <input type="number" name="amount">
    <br><br>
    <input type="submit" value="Submit">
</form>