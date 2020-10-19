$(document).ready(function () {
    var attemptString = {1: "First", 2: "Second", 3: "last"};
    // alert("chand");
    $('.guessForm').submit(function (event) {

        let userGuess = $("[name=userGuess]").val();
        if (userGuess < 0 || userGuess > 10) {
            alert(" Please guess the number between 1 to 10 .");
        } else {
            $.post("./guessNumberGame.php", {userGuess: userGuess}, function (data) {
                $(".guessForm")[0].reset();

                data = JSON.parse(data);

                $(".inputmessage").html("Your " + attemptString[data.attempt] + " guess is : " + userGuess);
                $(".resultMessage").html(data.msg);

            });
        }
        event.preventDefault();
    })
});