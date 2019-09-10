<?php
session_start();


$rawData = file_get_contents("php://input");

$data = json_decode($rawData, true);

$randomNumber = 0;

if($data['action'] == 'gameOn'){
    $randomNumber = rand(1,6);
    $rezultatas = '<input type="text" id="secretNumber" value="'.$randomNumber.'" style="display:inline-block;">
    <br>
    <input type="text" id="guess"><br>
    <button type="button" id="guessButton">Guess</button>';
}

if($data['action'] == 'guessing'){

    if(preg_match('/[1-6]{1}/m', $data['guessNumber'])){
        if($data['number'] > $data['guessNumber']){
            $rezultatas = 'Šilta  -  bandyk didesnį. Tai tavo bandymas nr.: '.$data['count'].', tau liko bandymų: '.($data['max']-$data['count']);
        }elseif($data['number'] < $data['guessNumber']){
            $rezultatas = 'Šilta  -  bandyk mažesnį.Tai tavo bandymas nr.: '.$data['count'].', tau liko bandymų: '.($data['max']-$data['count']);
        }elseif($data['number'] === $data['guessNumber']){
            $rezultatas = 'Šaunuolis! Atspėjai! Tai tavo bandymas nr.: '.$data['count'].', sutaupei '.($data['max']-$data['count']).'bandymus';
        }
    }

    if(!preg_match('/[1-6]{1}/m', $data['guessNumber'])){
        $rezultatas = 'Spėkite skaičių nuo 1 iki 6 :)';
    }
    
}

if($data['action'] == 'winning'){

    if(preg_match('/[1-6]{1}/m', $data['guessNumber'])){
        if((float)$data['number'] === (float)$data['guessNumber']){
            $rezultatas = 'Šaunuolis! Atspėjai! Tai tavo bandymas nr.: '.$data['count'].', sutaupei '.($data['max']-$data['count']).'bandymus';
        }
    }
    
}

if($data['action'] == 'lose'){
    $rezultatas = 'Pralaimėjai, tai buvo tavo paskutinis bandymas...';
}


$rez = json_encode(['rez' => $rezultatas]);
header('Content-Type: application/json');

echo  $rez;