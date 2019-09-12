<?php


$rawData = file_get_contents("php://input");

$data = json_decode($rawData, true);

// _d($rawData);
// _d($data);

if($data['action'] == 'sumatorius'){
    $rezultatas = (float)$data['x'] + (float)$data['y'];
}
if($data['action'] == 'skirtumatorius'){
    $rezultatas = (float)$data['x'] - (float)$data['y'];
}


$rez = json_encode(['rez' => $rezultatas]);
header('Content-Type: application/json');

echo  $rez; //rezultatosiuntimas;

_d($rezultatas);