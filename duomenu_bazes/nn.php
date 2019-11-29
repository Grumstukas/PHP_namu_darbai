<?php

/***************** čia scriptas kuris leidžia "prisijungti prie duombazes"  ************************************/

$host = 'localhost';
$db = 'pets';
$user = 'root'; //xammp visada root...
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

/***************** čia scriptas kuris leidžia duomanu bazei pateikti užklausas ************************************/
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

var_dump($pdo);
echo '<br>';
/*****************************************************/
$pet = rand(100, 1000);
$id = rand(10, 100);

/*********************Įtraukti informaciją********************************/
$stmt = $pdo->prepare("INSERT INTO pets(id, pet)
VALUES(?, ?);");
$stmt->execute([$id, $pet]);

/*********************Ištrinti informaciją********************************/

/*metodas apsaugo nuo visosduombazės ištrynimo*/

$delete_id = 2;
//$delete_id = '1 OR 1';

$stmt = $pdo->prepare("DELETE FROM pets
WHERE id = ?");

$stmt->execute([$delete_id]);



$stmt = $pdo->query('SELECT * FROM pets'); //uzklausa
/****************************************************************************/
//is statement imu po viena eilute ir darau su ja kazka...  (arba žiūrėk šitą, arba šitą užkomentuok ir žiūrėk kitą
while ($row = $stmt->fetch()) {
    echo $row['id'] . "\n" . $row['[pet]'] . '<br>';
}

/****************************************************************************/
//arba susikeliu i masyva
//$mas = $stmt->fetchAll();
//_dc($mas);
