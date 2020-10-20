<?php

use \PHPUnit\Framework\TestCase;
include_once "GuessNumber.php";

class GuessNumberTest extends TestCase {

    public function testUserInput () {
        $guessNumberObj = new GuessNumber();
        $response = $guessNumberObj->evaluateUserInput(22);

        $this->assertFalse($response);
    }

}