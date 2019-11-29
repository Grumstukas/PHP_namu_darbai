<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lora&display=swap" rel="stylesheet">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

    <title>Kauliuko žaidimas</title>
</head>
    <body>
        <p class='instrukcija'>INSTRUKCIJA:<br>Suprogramuokite žaidimą. <br>
            Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”.<br> 
            Šone yra rodomas žaidėjų rezultatas. <br>
            Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”. <br>
            Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato, <br>
            o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė “mesti kauliuką”). <br>
            Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. <br>
            Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo.</p>

        <div class="registracija" id="registracija">

            <div class="name">Pirmo žaidėjo vardas:<br></div>
            <input type="text" id="pirmas" name="name1"><br>
            <div class="name">Antro žaidėjo vardas:<br></div>
            <input type="text" id="antras" name="name2"><br>
            <div class="name">Iki kiek taškų norite žaisti? (min 10):<br></div>
            <input type="number" id="taskai" name="taskai"><br>
            <div id="start_button">
                <button class="start_button" id="start">PRADĖTI ŽAIDIMĄ</button>
            </div>
            
            <div id="game_play" class="game_play"></div>

        </div>

        



        <script>
/*********************************************************** */
        var startGame = function(pirmas,antras,taskai,action){
            axios.post('http://localhost/_pamoka1/PHP_namu_darbai/duomenu_perdavimas/Kauliuko_zaidimas/zaidimo_serveris.php', 
                {
                    pirmas: pirmas,
                    antras: antras,
                    taskai: taskai,
                    action: action
                })
            .then(function (response) {
                $('#registracija').empty().html(response.data.rez);
                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
/*********************************************************** */
        var playGame = function(action){
            axios.post('http://localhost/_pamoka1/PHP_namu_darbai/duomenu_perdavimas/Kauliuko_zaidimas/zaidimo_serveris.php', 
                {
                    action: action
                })
            .then(function (response) {
                $('#registracija').empty().html(response.data.rez);
                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
/*********************************************************** */
        var next_roll = function(action){
            axios.post('http://localhost/_pamoka1/PHP_namu_darbai/duomenu_perdavimas/Kauliuko_zaidimas/zaidimo_serveris.php', 
                {
                    action: action
                })
            .then(function (response) {
                $('#registracija').empty().html(response.data.rez);
                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
/*********************************************************** */
        var restart1 = function(action){
                    axios.post('http://localhost/_pamoka1/PHP_namu_darbai/duomenu_perdavimas/Kauliuko_zaidimas/zaidimo_serveris.php', 
                        {
                            action: action
                        })
                    .then(function (response) {
                        $('#registracija').empty().html(response.data.rez);
                        console.log(response.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
/*********************************************************** */
        var restart2 = function(action){
                    axios.post('http://localhost/_pamoka1/PHP_namu_darbai/duomenu_perdavimas/Kauliuko_zaidimas/zaidimo_serveris.php', 
                        {
                            action: action
                        })
                    .then(function (response) {
                        $('#registracija').empty().html(response.data.rez);
                        console.log(response.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
/*********************************************************** */
/*********************************************************** */
/*********************************************************** */

        $(document).ready(function(){
/*********************************************************** */
        $(document).on("click", "#start", function(){ 
            var pirmas = $("#pirmas").val();
            var antras = $("#antras").val();
            var taskai = $("#taskai").val();

            startGame(pirmas,antras,taskai,"gameOn");
        });
/*********************************************************** */
        $(document).on("click", "#play", function(){

            playGame("roll_dice");
        });
/*********************************************************** */
        $(document).on("click", "#next", function(){
            next_roll("next_roll");
        });
/*********************************************************** */
        $(document).on("click", "#restart1", function(){
            restart1("restart1");
        });
/*********************************************************** */
        $(document).on("click", "#restart2", function(){
            restart2("restart2");
        });
/*********************************************************** */
    });
    </script>

    </body>
</html>