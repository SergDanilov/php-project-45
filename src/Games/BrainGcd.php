<?php

/**
 * This allows greeting with User and know his name.
 * Then calculation greatest common divisor by two randoms numbers.
 * After that comparing user's answer with correct answer.
 * php version 8.1.24
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Games/brainGcd.php
 */

namespace Braingames\Games\brainGcd;

use function Braingames\Engine\engine_part;
use function cli\line;
use function cli\prompt;

use const Braingames\Engine\ROUNDS_COUNT;

const TASK = 'Find the greatest common divisor of given numbers.';

function runBrainGcd()
{
    //greeting
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    //main part game
    line(TASK);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $numberOne = rand(1, 50);
        $numberTwo = rand(1, 50);
        $min = min($numberOne, $numberTwo);

        $arrDivisor = [];

        for ($j = 1; $j <= $min; $j++) {
            if (($numberOne % $j === 0) && ($numberTwo % $j === 0)) {
                $arrDivisor[$j] = $j;
            }
        }

        $correctAnswer = max($arrDivisor);

        line("Question: {$numberOne} {$numberTwo}");
        $answer = prompt("Your answer");

        engine_part($name, $answer, $correctAnswer);
    }
    //winner
    line("Congratulations, {$name}!");
}
