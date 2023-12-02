<?php

/**
 * This calculation greatest common divisor by two randoms numbers.
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

namespace Braingames\Games\BrainGcd;

use function Braingames\Engine\runGameEngine;
use function cli\line;
use function cli\prompt;

use const Braingames\Engine\ROUNDS_COUNT;
use const Braingames\Engine\RANDOM_START_NUM;
use const Braingames\Engine\RANDOM_END_NUM;

const TASK = 'Find the greatest common divisor of given numbers.';

function runBrainGcd()
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $numberOne = rand(RANDOM_START_NUM, RANDOM_END_NUM);
        $numberTwo = rand(RANDOM_START_NUM, RANDOM_END_NUM);
        $questions[$i] = "{$numberOne} {$numberTwo}";

        $minNum = min($numberOne, $numberTwo);
        $divisors = [];
        for ($j = 1; $j <= $minNum; $j++) {
            if (($numberOne % $j === 0) && ($numberTwo % $j === 0)) {
                $divisors[$j] = $j;
            }
        }

        $correctAnswers[$i] = max($divisors);
    }
    runGameEngine($questions, $correctAnswers, TASK);
}
