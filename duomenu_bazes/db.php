<?php
/***************** čia scriptas kuris leidžia "prisijungti prie duombazes"  ************************************/

$host = 'localhost';
$db   = 'people'; //duomenu bazes vardas
$user = 'root'; //xammp visada root...
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
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
$akiu_spalva = rand(100,1000);

/*********************Įtraukti informaciją********************************/
$stmt = $pdo->prepare ("INSERT INTO people(vardas, pavarde, gimimo_metai, lytis, akiu_spalva)
VALUES(?, ?, ?, ?, ?);");
$stmt->execute(['Lina', 'Tarteniene', '1963-06-18', true, $akiu_spalva]);

/*********************Ištrinti informaciją********************************/

/*metodas apsaugo nuo visosduombazės ištrynimo*/

$delete_id = 2;
//$delete_id = '1 OR 1';

$stmt = $pdo->prepare ("DELETE FROM people
WHERE id = ?");

$stmt->execute([$delete_id]);



$stmt = $pdo->query('SELECT * FROM people'); //uzklausa
/****************************************************************************/
//is statement imu po viena eilute ir darau su ja kazka...
while ($row = $stmt->fetch())
{
    echo $row['id'] . "\n".$row['vardas']. "\n".$row['pavarde']. "\n".$row['gimimo_metai']. "\n".$row['lytis']. "\n".$row['akiu_spalva'].'<br>';
}

/****************************************************************************/
//arba susikeliu i masyva
//$mas = $stmt->fetchAll();
//_dc($mas);

