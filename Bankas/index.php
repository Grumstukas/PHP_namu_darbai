<?php
session_start();

include __DIR__ . '/hello_my_db.php';
echo '<div style="font-size: 20px; font-weight: 800; margin: 20px;">UAB Banku BANKAS</div>';


if (isset($_SESSION['accounts']))
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
        "); //uzklausa
////
//_dd($stmt->fetchAll());


    /****************************************************************************/
//is statement imu po viena eilute ir darau su ja kazka...
    $count_of_accounts = 0;
    $bank_money = 0;
    $client_id = 0; //1

    while ($row = $stmt->fetch())
    {
        $bank_money += $row['amount'];

        if ($client_id != $row['client_id'])
        {
            $count_of_accounts++;
            $client_id = $row['client_id'];

            echo '<form action="" method="POST">
                         <div style="width: 100%; display: inline-block; float: left; margin-bottom: 10px; padding: 5px 0; border-top: 1px solid black; border-bottom: 1px solid black; font-weight: 800;">
                            <div style="width: 40px; display: inline-block; float: left;">ID-' . $row['client_id'] . '</div>
                            
                            <div style="width: 80px; display: inline-block; float: left;">' . $row['name'] . '</div>
                            <div style="width: 80px; display: inline-block; float: left;">' . $row['surname'] . '</div>
                            
                            <button type="submit" name="rand" value="5 ' . $row['acountID'] . ' ' . $row['amount'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['acc_number'] . ' ' . $row['client_id'] . '">ištrinti klientą</button>
                          </div>
                          
                          <div style="width: 100%; display: inline-block; float: left; margin-bottom: 10px; margin-left: 10px;">
                          
                            <div style="width: 100px; display: inline-block; float: left; text-align: right;margin-right: 20px;"> Sąskaitos ID : ' . $row['acountID'] . '</div>
                            <div style="width: 50px; display: inline-block; float: left; text-align: right;margin-right: 20px;">' . $row['amount'] . ' €</div>
                            
                            <button type="submit" name="rand" value="1 ' . $row['acountID'] . ' ' . $row['amount'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['acc_number'] . ' ' . $row['client_id'] . '">papildyti pinigų</button>
                            <button type="submit" name="rand" value="2 ' . $row['acountID'] . ' ' . $row['amount'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['acc_number'] . ' ' . $row['client_id'] . '">išleisti pinigų</button>
                            <button type="submit" name="rand" value="3 ' . $row['acountID'] . ' ' . $row['amount'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['acc_number'] . ' ' . $row['client_id'] . '">ištrinti sąskaitą</button>
                          </div>
                      </form>';
        }
        else
        {
            echo '<form action="" method="POST">
                          <div style="width: 100%; display: inline-block; float: left; margin-bottom: 10px; margin-left: 10px;">
                          
                            <div style="width: 100px; display: inline-block; float: left; text-align: right;margin-right: 20px;"> Sąskaitos ID : ' . $row['acountID'] . '</div>
                            <div style="width: 50px; display: inline-block; float: left; text-align: right;margin-right: 20px;">' . $row['amount'] . ' €</div>
                            
                            <button type="submit" name="rand" value="1 ' . $row['acountID'] . ' ' . $row['amount'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['acc_number'] . '">papildyti pinigų</button>
                            <button type="submit" name="rand" value="2 ' . $row['acountID'] . ' ' . $row['amount'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['acc_number'] . '">išleisti pinigų</button>
                            <button type="submit" name="rand" value="3 ' . $row['acountID'] . ' ' . $row['amount'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['acc_number'] . '">ištrinti sąskaitą</button>
                          </div>
                      </form>';
        }

    }
    echo 'Šiuo metu bankas turi klientų: ' . $count_of_accounts . '<br> Kurie banke laiko ' . $bank_money . ' €';
}
else
{
    echo 'Šiuo metu banke sąskaitų nėra';
}

if (!empty($_POST))
{
    $info = explode(' ', $_POST['rand']);
    $command = $info[0];
    $_SESSION['acountID'] = $info[1];
    $_SESSION['client_balance'] = $info[2];
    $_SESSION['client_name'] = $info[3];
    $_SESSION['client_surname'] = $info[4];
    $_SESSION['acc_number'] = $info[5];
    $_SESSION['client_id'] = $info[6];

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
    $client_money = 0;
    $all_my_accounts = [];
    $rows = $stmt->fetchAll();

    foreach ($rows as $row)
    {
        if ($row['client_id'] == $_SESSION['client_id'])
        {
            $client_money += $row['amount'];
            $all_my_accounts[] = $row['acc_number'];
        }
    }

    switch ($command)
    {
        case 1:
            header('Location: ' . $localHostAdress . 'increase.php');
            break;
        case 2:
            header('Location: ' . $localHostAdress . 'reduce.php');
            break;
        case 3:
            if ($_SESSION['client_balance'] == 0)
            {
                $stmt = $pdo->prepare("DELETE FROM b_accounts WHERE acc_number = ?");
                $stmt->execute([$_SESSION['acc_number']]);
                header('Location: ' . $localHostAdress . 'index.php');
                break;
            }
            else
            {
                header('Location: ' . $localHostAdress . 'delete.php');
                break;
            }
        case 4:
            header('Location: ' . $localHostAdress . 'newClient.php');/*po posto reikia puslapį persiųsti */
            break;
        case 5:
            if ($client_money == 0)
            {
                foreach ($all_my_accounts as $account)
                {
                    $stmt = $pdo->prepare("DELETE FROM b_accounts WHERE acc_number = ?");
                    $stmt->execute([$account]);
                }

                $stmt = $pdo->prepare("DELETE FROM b_clients WHERE id = ?");
                $stmt->execute([$_SESSION['client_id']]);
                header('Location: ' . $localHostAdress . 'index.php');
                break;
            }
            else
            {
                header('Location: ' . $localHostAdress . 'delete.php');
                break;
            }
    }
    die(); //naršykle daugiau kieko negaus - tegu eina dirbti
}
?>

<form action="" method="POST" style="margin-top: 20px;">
    <input type="hidden" name="rand" value="4">
    <input type="submit" value="REGISTRUOTIS">

</form>




