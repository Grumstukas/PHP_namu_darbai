<?php
session_start();

include __DIR__.'/hello_my_db.php';
echo '<div style="font-size: 20px; font-weight: 800; margin: 20px;">UAB Banku BANKAS</div>';


if(isset($_SESSION['accounts'])) {
    $stmt = $pdo->query('SELECT * FROM b_clients'); //uzklausa
    /****************************************************************************/
//is statement imu po viena eilute ir darau su ja kazka...
    $count_of_accounts = 0;
    $bank_money = 0;

    while ($row = $stmt->fetch())
    {
        $count_of_accounts ++;
        $bank_money += $row['amount'];

        echo '<form action="" method="POST">
<div style="width: 100%; display: inline-block; float: left; margin-bottom: 10px;">
                <div style="width: 40px; display: inline-block; float: left;">ID-'.$row['id'].'</div>
                <div style="width: 80px; display: inline-block; float: left;">'.$row['name'].'</div>
                <div style="width: 80px; display: inline-block; float: left;">'.$row['surname'].'</div>
                <div style="width: 50px; display: inline-block; float: left; text-align: right;margin-right: 20px;">'.$row['amount'].' €</div>
                <button type="submit" name="rand" value="1 '.$row['id'].' '.$row['amount'].' '.$row['name'].' '.$row['surname'].'">papildyti pinigų</button>
                <button type="submit" name="rand" value="2 '.$row['id'].' '.$row['amount'].' '.$row['name'].' '.$row['surname'].'">išleisti pinigų</button>
                <button type="submit" name="rand" value="3 '.$row['id'].' '.$row['amount'].' '.$row['name'].' '.$row['surname'].'">ištrinti klientą</button>
              </div>
              </form>';

    }
    echo 'Šiuo metu bankas turi klientų: '.$count_of_accounts.'<br> Kurie banke laiko '.$bank_money.' €';
}
else
{
    echo 'Šiuo metu banke sąskaitų nėra';
}

    if(!empty($_POST)){
        $info = explode(' ',$_POST['rand']);
        $command = $info[0];
        $_SESSION['client_id'] = $info[1];
        $_SESSION['client_balance'] = $info[2];
        $_SESSION['client_name'] = $info[3];
        $_SESSION['client_surname'] = $info[4];


            switch ($command){
                case 1:
                    header('Location: http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/increase.php');
                    break;
                case 2:
                    header('Location: http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/reduce.php');
                    break;
                case 3:
                    if($_SESSION['client_balance'] == 0){
                        $stmt = $pdo->prepare ("DELETE FROM b_clients WHERE id = ?");
                        $stmt->execute([$_SESSION['client_id']]);
                        header('Location: http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/index.php');
                        break;
                    }else{
                        header('Location: http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/delete.php');
                        break;
                    }
                case 4:
                    header('Location: http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/newClient.php');/*po posto reikia puslapį persiųsti */
                    break;
            }
        die(); //naršykle daugiau kieko negaus - tegu eina dirbti
    }
?>

<form action="" method="POST" style="margin-top: 20px;">
    <input type="hidden" name="rand" value="4">
    <input type="submit" value="REGISTRUOTIS">

</form>




