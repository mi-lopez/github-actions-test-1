<?php

namespace milopez\GithubActions\App;

class MyClass
{
    public function sum(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }

    public function multiply(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber * $secondNumber;
    }

    public function divide(int $firstNumber, int $secondNumber): float
    {
        return $firstNumber / $secondNumber;
    }
    public function substract(int $firstNumber, int $secondNumber)
    {
        return $firstNumber - $secondNumber;
    }
}
