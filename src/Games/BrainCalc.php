<?php

/**
 * This calculation random expression and asking user answer.
 * After that comparing user's answer with correct answer.
 * php version 8.1.24
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Games/BrainCalc.php
 */

namespace Braingames\Games\BrainCalc;

use function Braingames\Engine\runGameEngine;

use const Braingames\Engine\ROUNDS_COUNT;
use const Braingames\Engine\RANDOM_START_NUM;
use const Braingames\Engine\RANDOM_END_NUM;

const TASK = "What is the result of the expression?";

function runBrainExpression()
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $numberOne = rand(RANDOM_START_NUM, RANDOM_END_NUM);
        $numberTwo = rand(RANDOM_START_NUM, RANDOM_END_NUM);
        $operatorArray = ["+","-","*"];
        $indexRandom = rand(0, 2);

        $operator = $operatorArray[$indexRandom];
        switch ($operator) {
            case "+":
                $correctAnswers[$i] = $numberOne + $numberTwo;
                break;
            case "-":
                $correctAnswers[$i] = $numberOne - $numberTwo;
                break;
            case "*":
                $correctAnswers[$i] = $numberOne * $numberTwo;
                break;
            default:
                throw new \Exception("Unknown operator: '{$operator}'!");
        }
        $questions[$i] = "{$numberOne} {$operator} {$numberTwo}";
    }
    runGameEngine($questions, $correctAnswers, TASK);
}
