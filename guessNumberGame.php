<?php
include_once "./GuessNumber.php";
session_start();
//$attemptArray = [1 => "First", 2 => "Second", 3 => "Last"];
$guessResult = null;
$userGuess = null;
$guessNumberObj = null;
$response = [];

if (isset($_POST['userGuess'])) {
    $userGuess = $_POST['userGuess'];
    unset($_POST);
    if (isset($_SESSION['numberOfAttempt']) && isset($_SESSION['numberObj'])) {
        $_SESSION['numberOfAttempt'] += 1;
        $guessNumberObj = $_SESSION['numberObj'];
        $guessResult = $guessNumberObj->evaluateUserInput($userGuess);
    } else {
        $guessNumberObj = new GuessNumber();
        $guessResult = $guessNumberObj->evaluateUserInput($userGuess);
        $_SESSION['numberOfAttempt'] = 1;
        $_SESSION['numberObj'] = $guessNumberObj;
    }
}

if (isset($guessResult)) {
    $response["attempt"] = $_SESSION['numberOfAttempt'];
    if (!$guessResult) {
        $response = ["msg" => "Please choose the number from 1 to 10", "code" => 422];
        $_SESSION['numberOfAttempt'] -= 1;
    } else {
        if ($guessResult['code'] == 1) {
            session_unset();
            session_destroy();
        } elseif ($_SESSION['numberOfAttempt'] == 3) {
            $guessResult = $guessResult['code'] != 1 ? ["msg" => "Sorry! You lost the game. Please try again."] : $response;
            session_unset();
            session_destroy();
        }
        $response = array_merge($response, $guessResult);
    }
}
echo json_encode($response, true);
?>
