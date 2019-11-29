<?php
session_start();


$rawData = file_get_contents("php://input");

$data = json_decode($rawData, true);

$randomNumber = 0;

function result($response, $result_type){
    $HTML = '';
    if($result_type == 1){
        $HTML = '<h3>tau liko '.$_SESSION['remaining_guesses'].' '.($_SESSION['remaining_guesses'] > 1? 'bandymai' : 'bandymas').'</h3>
                <input type="text" id="guess"><br><br>
                <button type="button" id="guessButton">Guess</button>
                <div id="rezultatas" style="margin-top:20px;">'.$response.'</div>';
    } elseif($result_type == 2){
        $HTML = '<div id="button">
                    <button type="button" id="start">Start</button>
                </div>
                <div id="rezultatas" style="margin-top:20px;">'.$response.'</div>';
    }
    return $HTML; 
}


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
if($data['action'] == 'gameOn'){
    $_SESSION['secret_number'] = rand(1,6);
    $_SESSION['remaining_guesses'] = 3;
    $_SESSION['guess_number'] = 0;
    $rezultatas = '
    <h3>tau liko '.$_SESSION['remaining_guesses'].' '.($_SESSION['remaining_guesses'] > 1? 'bandymai' : 'bandymas').'</h3>
    <input type="text" id="guess"><br><br>
    <button type="button" id="guessButton">Guess</button>';
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
if($data['action'] == 'guessing'){

    if( (preg_match('/[1-6]{1}/m',$data['guessNumber'])) && (strlen($data['guessNumber'])===1) ){
        $guess_number = $data['guessNumber'];
        $_SESSION['remaining_guesses']--;
        $_SESSION['guess_number']++;

        if($_SESSION['remaining_guesses'] > 0 ){
            if($guess_number > $_SESSION['secret_number']){
                $response = 'Šilta  -  bandyk mažesnį';
                $rezultatas = result($response, 1);
            } elseif($guess_number < $_SESSION['secret_number']){
                $response = 'Šilta  -  bandyk didesnį';
                $rezultatas = result($response, 1);
            } elseif($guess_number == $_SESSION['secret_number']){
                $response = 'Šaunuolis! Atspėjai!<br>'.($_SESSION['guess_number'] == 1? 'Iš pirmo karto - ŽAVINGA !!!' : 'Neblogai, sunaudojai tik 2 spėjimus :)');
                $rezultatas = result($response, 2);
            }
        }else{
            if($guess_number == $_SESSION['secret_number']){
                $response = 'Šaunuolis! Atspėjai!<br>Tai buvo tavo paskutinis bandymas!';
            } else {
                $response = 'Pralaimėjai,<br>tai buvo tavo paskutinis bandymas...';
            }
            $rezultatas = result($response, 2);
        }

    } else {
        $rezultatas = result('Netinkamas pasirinkimas. Turėtum naudoti skaičių nuo 1 iki 6 :)',1);
    }
}

$rez = json_encode(['rez' => $rezultatas]);
header('Content-Type: application/json');

echo  $rez;