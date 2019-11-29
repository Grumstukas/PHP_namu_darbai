<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

    <title>Atspėk skaičių</title>
</head>
<body>
    <div class="box" style="
    width: 800px;
    padding: 20px 20px 35px 20px;
    text-align: center;
    margin-left: calc( (100% - 800px) / 2 );
    margin-top: 10px;">
    Suprogramuokite žaidimą. 
    Žaidimas prasideda mygtuku “pradėti”. 
    Jį paspaudus skriptas sugeneruoja atsitiktinį skaičių nuo 1 iki 6 bet jo neišveda, o vietoj jo parodo laukelį, 
    kuriame žaidėjas rašo savo spėjimą. Neatspėjus išvedamas pranešimas “neatspėjote” ir laukelis įrašyti naujam spėjimui. 
    Atspėjus skaičių išvedamas pranešimas “atspėjote”, spėjimų skaičius (kiek kartų buvo spėta) ir mygtukas pradėti. 
    Įvedimo laukelyje tikrinkite (serverio pusėje), kad įvedamas būtų tik skaičius intervale nuo 1 iki 6. 
    Jeigu įvedimas netinkamas, turi būti išvedama informacija su paaiškinimu ir spėjimas neskaičiuojamas.
    </div>

    <div class="box" style="
    width: 500px;
    border: 1px solid black;
    padding: 20px 20px 35px 20px;
    text-align: center;
    margin-left: calc( (100% - 500px) / 2 );
    margin-top: 10px;">

        <h1>Atspėk skaičių intervale nuo 1 iki 6</h1>
        

        <div id="guessField">
        <h3>tam turi 3 bandymus</h3>
            <div id="button">
                <button type="button" id="start">Start</button>
            </div>
        </div>

    </div>





<script>
/*********************************************************** */
    var startGame = function(action){
        axios.post('http://localhost/_pamoka1/PHP_namu_darbai/duomenu_perdavimas/atspek_skaiciu/gameServer.php', 
            {
                action: action
            })
        .then(function (response) {
            document.getElementById('guessField').innerHTML = (response.data.rez);
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
    }
/*********************************************************** */
    var playGame = function(guessNumber, action){
        axios.post('http://localhost/_pamoka1/PHP_namu_darbai/duomenu_perdavimas/atspek_skaiciu/gameServer.php', 
            {
                guessNumber: guessNumber,
                action: action
            })
        .then(function (response) {
            document.getElementById('guessField').innerHTML = (response.data.rez);
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
    }

/*********************************************************** */
/*********************************************************** */
/*********************************************************** */


    // $(document).ready(function(){
/*********************************************************** */
        document.getElementById('start').addEventListener('click', function(){
            startGame("gameOn");
        })
/*********************************************************** */
       
        


/*********************************************************** */
    </script>
</body>
</html>