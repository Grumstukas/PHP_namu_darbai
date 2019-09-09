<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

    <title>Atspėk skaičių</title>
</head>
<body>
<h1>Atspėk koks skaičius užmaskuotas !!!</h1>

<!-- <input type="text" id="secretNumber" value="1" style="display:none;"> -->

<div id="button">
    <button type="button" id="start">Start</button>
</div>

<br>
<div id="guessField"></div>
<br>
<div id="rezultatas"></div>



<script>

    var startGame = function(guessNumber,action){
        axios.post('http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/gameServer.php', 
            {
                guessNumber: guessNumber,
                action: action
            })
        .then(function (response) {
            $('#guessField').empty().html(response.data.rez);
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
    }

    var playGame = function(number, guessNumber,count, max, action){
        axios.post('http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/gameServer.php', 
            {
                number:number,
                guessNumber: guessNumber,
                count:count,
                max: max,
                action: action
            })
        .then(function (response) {
            $('#rezultatas').empty().html(response.data.rez);
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
    }

    var winGame = function(number, guessNumber,count, max, action){
        axios.post('http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/gameServer.php', 
            {
                number:number,
                guessNumber: guessNumber,
                count:count,
                max: max,
                action: action
            })
        .then(function (response) {
            $('#guessField').empty().html(response.data.rez);
            $('#rezultatas').empty();
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
    }

    var loseGame = function(number, guessNumber,count, action){
        axios.post('http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/gameServer.php', 
            {
                number:number,
                guessNumber: guessNumber,
                count:count,
                action: action
            })
        .then(function (response) {
            $('#guessField').empty().html(response.data.rez);
            $('#rezultatas').empty();
            console.log(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
    }



    $(document).ready(function(){
            var count = 0;
            var max = 3;
        $(document).on("click", "#start", function(){ 
            count = 0;
            var guessNumber = 0;
            var secretNumber = $("#secretNumber").val();

            startGame(guessNumber,"gameOn");
            console.log(guessNumber);
        });

        $(document).on("click", "#guessButton", function(){ 
            var guessNumber = $("#guess").val();
            var secretNumber = $("#secretNumber").val();
            count++;
            max;

            if(count < max){
                if( guessNumber !== secretNumber){
                    playGame(secretNumber,guessNumber,count,max,"guessing");
                } else if (guessNumber === secretNumber){
                    winGame(secretNumber,guessNumber,count,max,"winning");
                }
            }else if (count === max){
                loseGame(secretNumber,guessNumber,count,"lose");
            }
            
            
        });


    });
    </script>
</body>
</html>