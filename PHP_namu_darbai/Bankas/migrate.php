<?php

include __DIR__ . '/hello_my_db.php';

$sql = "DROP TABLE IF EXISTS b_accounts;";
$pdo->query($sql);

$sql = "DROP TABLE IF EXISTS b_clients;";
$pdo->query($sql);

/************************/
$sql = "CREATE TABLE b_clients (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    surname varchar(50) DEFAULT NULL
);
";
$pdo->query($sql);

$sql = "CREATE TABLE b_accounts (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL(11,2) DEFAULT NULL,
    acc_number varchar(50) DEFAULT NULL,
    client_ID INT,
    FOREIGN KEY (client_ID) 
        REFERENCES b_clients(id)
);
";
$pdo->query($sql);