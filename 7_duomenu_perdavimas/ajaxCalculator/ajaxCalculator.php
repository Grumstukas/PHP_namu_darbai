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

    <title>Sumatorius</title>
</head>
<body>
<h1>Sumatorius & Skirtumatorius</h1>
    X:
    <input type="text" id="x"><br>
    Y:
    <input type="text" id="y"><br><br>
  
    <button type="button" id="sum">Suma</button>
    <button type="button" id="skir">Skirtumas</button>

    <div id='rezultatas'></div>

    <script>
            var A = function(x, y, action){
                    axios.post('http://localhost/_pamoka1/PHP_namu_darbai/namu_darbai/server.php', 
                    {
                        x: x,
                        y: y,
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

        $(document).ready(function(){

            $(document).on("click", "#sum", function(){ 
                
                var x = $("#x").val();
                var y = $("#y").val();

                A(x, y, "sumatorius");

                console.log(x);
                console.log(y);
            });

            $(document).on("click", "#skir", function(){
                
                var x = $("#x").val();
                var y = $("#y").val();

                A(x, y, "skirtumatorius");

                console.log(x);
                console.log(y);
            });



        });
    </script>
</body>
</html>