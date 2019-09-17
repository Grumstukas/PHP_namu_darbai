<?php

session_start();

include __DIR__.'/hello_my_db.php';

if(!empty($_POST)){


    $stmt = $pdo->prepare ("INSERT INTO b_clients (name, surname, amount)
VALUES(?, ?, ?);");
    $stmt->execute([$_POST['name'], $_POST['surname'], 0]);

    header('Location: http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/');/*po posto reikia puslapį persiųsti */
    die(); //naršykle daugiau kieko negaus - tegu eina dirbti
}
?>

    <form action="" method="POST">
    Vardas:<br>
    <input type="text" name="name">
    <br>
    Pavarde:<br>
    <input type="text" name="surname">
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
<?php

