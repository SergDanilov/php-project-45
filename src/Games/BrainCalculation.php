<?php

/**
 * This allows greeting with User and know his name.
 * Then calculation random expression and asking user answer.
 * After that comparing user's answer with correct answer.
 * php version 8.1.24
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Games/brainCalculation.php
 */

namespace Braingames\Games\brainCalculation;

use function Braingames\Engine\engine_part;
use function cli\line;
use function cli\prompt;

use const Braingames\Engine\ROUNDS_COUNT;

const TASK = "What is the result of the expression?";

function runBrainCalc()
{
    //greeting
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    //main part game
    line(TASK);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $numberOne = rand(0, 100);
        $numberTwo = rand(0, 100);
        $operatorArray = ["+","-","*"];
        $indexRandom = rand(0, 2);

        $operator = $operatorArray[$indexRandom];
        switch ($operator) {
            case "+":
                $correctAnswer = $numberOne + $numberTwo;
                break;
            case "-":
                $correctAnswer = $numberOne - $numberTwo;
                break;
            case "*":
                $correctAnswer = $numberOne * $numberTwo;
                break;
        }

        line("Question: {$numberOne} {$operator} {$numberTwo}");
        $answer = prompt("Your answer");

        engine_part($name, $answer, $correctAnswer);
    }
    //winner
    line("Congratulations, {$name}!");
}
