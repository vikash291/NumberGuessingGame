<?php

class GuessNumber
{
    private $secretNumber = null;

    public function __construct()
    {
        $this->secretNumber = rand(1, 10);
    }

    public function evaluateUserInput($userNumber)
    {
        if ($userNumber == $this->secretNumber) {
            $result = ["msg"=>"Right! You have won the Game", "code"=> 1];
        } elseif (abs($userNumber - $this->secretNumber) >= 3) {
            $result = ["msg"=>"(cold)", "code"=> 2];
        } else if (abs($userNumber - $this->secretNumber) == 2) {
            $result = ["msg"=>"(warm)", "code"=> 3];
        } else if (abs($userNumber - $this->secretNumber) == 1) {
            $result = ["msg"=>"(hot)", "code"=> 4];
        }
        return $result;
    }

}