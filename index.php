<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./formAction.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <style>
        .container {
            width: 20%;
        }
    </style>
</head>
<body class="bg-light">
<div class="container py-5 text-center w-20">
    <h1 class="display-5">Number Game</h1>
    <p class="lead">I am thinking a number from 1 to 10.</p>
    <hr class="my-4">
    <p> You must guess what it is in three tries.</p>
    <form class="form-inline guessForm">

        <div class="form-group mx-sm-3 mb-2">
            <input type="number" class="form-control" name="userGuess" id="userGuess" placeholder="Guess the number"
                   min="1" max="10" required>
        </div>
        <input type="submit" value="Guess" class="btn btn-primary mb-2" name="guessBtn">

    </form>

    <div class="alert" role="alert">
        <p class="inputmessage"></p>
        <p class="resultMessage"></p>
    </div>
</div>

</body>
</html>