<?php

/**
 * Game allows user to check random number if it's prime or no.
 * php version 8.1.24
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Games/brainPrime.php
 */

namespace Braingames\Games\BrainPrime;

use function Braingames\Engine\runGameEngine;

use const Braingames\Engine\ROUNDS_COUNT;
use const Braingames\Engine\RANDOM_START_NUM;
use const Braingames\Engine\RANDOM_END_NUM;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $item)
{
    if ($item < 2) {
        return false;
    }
    $checkArray = [];
    for ($k = 2; $k < $item; $k++) {
        if (($item % $k) === 0) {
            $checkArray[] = $k;
        }
    }
    return (count($checkArray) === 0);
}

function runBrainPrime()
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $questions[$i] = rand(RANDOM_START_NUM, RANDOM_END_NUM);
        foreach ($questions as $item) {
            $correctAnswers[$i] = isPrime($item) ?  'yes' : 'no';
        }
    }
    runGameEngine($questions, $correctAnswers, TASK);
}
