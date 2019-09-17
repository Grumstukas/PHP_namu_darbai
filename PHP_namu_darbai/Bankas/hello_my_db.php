<?php
$host = 'localhost';
$db   = 'bank_clients'; //duomenu bazes vardas
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


$localHostAdress = 'http://localhost/PHP_namu_darbai/PHP_namu_darbai/Bankas/';