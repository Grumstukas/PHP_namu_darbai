<?php
session_start();


$rawData = file_get_contents("php://input");

$data = json_decode($rawData, true);

function game_play($name1, $name2, $point1, $point2, $button, $message, $registration)
{
    $Html = '';
    if ($button == '') {
        $button_area = '
        <div id="play_button">
            <button class="play_button" id="play">mesti kauliuką</button>
        </div>';
    } else {
        $button_area = $button;
    }

    if ($message == '') {
        $message_area = 'Kauliuką meta  ' . $name1 . ':';
    } else {
        $message_area = $message;
    }

    if ($registration == 0) {
        $Html =
            '<div id="game_play" class="game_play">
        <div class="player1">
            <div class="player" id="player1">' . $name1 . ' turi </div>
            <div class="points">' . $point1 . ' taškų </div>
        </div>

        <div class="current_player" id="current_player">' . $message_area . '</div>

        <div class="player2">
            <div class="player" id="player2">' . $name2 . ' turi </div>
            <div class="points">' . $point2 . ' taškų </div>
        </div>
        ' . $button_area .
            '</div>';
    } elseif ($registration == 1) {

        $Html = '
        <div class="massage">' . $message_area . '</div>
        <div class="name">Pirmo žaidėjo vardas:<br></div>
        <input type="text" id="pirmas" name="name1"><br>
        <div class="name">Antro žaidėjo vardas:<br></div>
        <input type="text" id="antras" name="name2"><br>
        <div class="name">Iki kiek taškų norite žaisti? (min 10):<br></div>
        <input type="number" id="taskai" name="taskai"><br>
        <div id="start_button">
            <button class="start_button" id="start">PRADĖTI ŽAIDIMĄ</button>
        </div>';
    }
    return $Html;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* Naujo žaidimo inicijavimas */
if ($data['action'] == 'gameOn') {

    if ((($data['pirmas'] == '') || ($data['antras'] == '')) || ($data['pirmas'] == $data['antras'])) {
        $message = 'Abu žaidėjai turi turėti unikalius vadus';
        $rezultatas = game_play(
            '',
            '',
            0,
            0,
            '',
            $message,
            1
        );
    } elseif (($data['taskai'] == '') || ((int)$data['taskai'] < 10)) {
        $message = 'Pasirinkite taškų sumą, kurią surinkus žaidimas baigsis';
        $rezultatas = game_play(
            '',
            '',
            0,
            0,
            '',
            $message,
            1
        );
    } else {
        $_SESSION['player_first'] = $data['pirmas'];
        $_SESSION['player_second'] = $data['antras'];
        $_SESSION['player_first_points'] = $_SESSION['player_second_points'] = 0;
        $_SESSION['count_of_rolls'] = 0;
        $_SESSION['max_points'] = (int)$data['taskai'];
        $rezultatas = game_play(
            $_SESSION['player_first'],
            $_SESSION['player_second'],
            $_SESSION['player_first_points'],
            $_SESSION['player_second_points'],
            '',
            '',
            0
        );
    }
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* kauliuko metimo reziumavimas */
if ($data['action'] == 'roll_dice') {
    $_SESSION['count_of_rolls']++;
    $randomNumber = rand(1, 6);
    $person = '';
    $mygtukas = '';

    /* * * * * * * * * * * * * * */
    if ($_SESSION['count_of_rolls'] == 1) {
        $person = $_SESSION['player_first'];
        $_SESSION['player_first_points'] += $randomNumber;
    } else {
        if ($_SESSION['count_of_rolls'] % 2 == 1) {
            $_SESSION['player_first_points'] += $randomNumber;
            $person = $_SESSION['player_first'];
        } elseif ($_SESSION['count_of_rolls'] % 2 == 0) {
            $_SESSION['player_second_points'] += $randomNumber;
            $person = $_SESSION['player_second'];
        }
    }
    $message = 'Kauliuką meta  ' . $person . ':';
    $mygtukas = '<div id="play_button">
                    <button class="restart_button " id="restart1">Žaisti iš naujo? (Tie patys žaidėjai)</button>
                    <button class="restart_button" id="restart2">Žaisti iš naujo? (Nauji žaidėjai)</button>
                </div>';

    /* * * * * * * * * * * * * * */
    if ($_SESSION['player_first_points'] >= $_SESSION['max_points']) {
        $message = 'Laimėjo ' . $_SESSION['player_first'];
    } elseif ($_SESSION['player_second_points'] >= $_SESSION['max_points']) {
        $message = 'Laimėjo ' . $_SESSION['player_second'];
    } else {
        $mygtukas = '<div id="play_button" class="result">
                        <div class="plus_points"> + ' . $randomNumber . ' taškai </div>
                        <button class="play_button" id="next">kito zaidejo eile</button>
                    </div>';
    }
    /* * * * * * * * * * * * * * */

    $rezultatas = game_play(
        $_SESSION['player_first'],
        $_SESSION['player_second'],
        $_SESSION['player_first_points'],
        $_SESSION['player_second_points'],
        $mygtukas,
        $message,
        0);

}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* pasiruošimas kitam metimui */
if ($data['action'] == 'next_roll') {

    $person = '';

    if ($_SESSION['count_of_rolls'] % 2 == 0) {
        $person = $_SESSION['player_first'];
    } elseif ($_SESSION['count_of_rolls'] % 2 == 1) {
        $person = $_SESSION['player_second'];
    }
    $message = 'Kauliuką meta  ' . $person . ':';

    $rezultatas = game_play(
        $_SESSION['player_first'],
        $_SESSION['player_second'],
        $_SESSION['player_first_points'],
        $_SESSION['player_second_points'],
        '',
        $message,
        '');

}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* partija iš naujo*/
if ($data['action'] == 'restart1') {

    $_SESSION['player_first_points'] = $_SESSION['player_second_points'] = 0;
    $_SESSION['count_of_rolls'] = 0;
    $rezultatas = game_play(
        $_SESSION['player_first'],
        $_SESSION['player_second'],
        $_SESSION['player_first_points'],
        $_SESSION['player_second_points'],
        '',
        '',
        0
    );
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* visai iš naujo*/
if ($data['action'] == 'restart2') {

    $_SESSION['player_first'] = '';
    $_SESSION['player_second'] = '';
    $_SESSION['player_first_points'] = 0;
    $_SESSION['player_second_points'] = 0;
    $_SESSION['player_second_points'] = 0;
    $_SESSION['max_points'] = 0;

    $message = 'Užregistruokite naujus žaidėjus ir parinkite taškų sumą';
    $rezultatas = game_play(
        $_SESSION['player_first'],
        $_SESSION['player_second'],
        $_SESSION['player_first_points'],
        $_SESSION['player_second_points'],
        '',
        $message,
        1);
}

$rez = json_encode(['rez' => $rezultatas]);
header('Content-Type: application/json');

echo $rez;