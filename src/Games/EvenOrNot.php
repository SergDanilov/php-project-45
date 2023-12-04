<?php

/**
 * Game allows user to check random number, if it even or no.
 * php version 8.1.24
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Games/evenOrNot.php
 */

namespace Braingames\Games\EvenOrNot;

use function Braingames\Engine\runGameEngine;

use const Braingames\Engine\ROUNDS_COUNT;
use const Braingames\Engine\RANDOM_START_NUM;
use const Braingames\Engine\RANDOM_END_NUM;

const TASK = 'Answer "yes" if the number is even, otherwise answer "no".';


function isEven(int $item)
{
    return $item % 2 === 0;
}

function runBrainEven()
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $questions[$i] = rand(RANDOM_START_NUM, RANDOM_END_NUM);
        foreach ($questions as $item) {
            $correctAnswers[$i] = isEven($item) ?  'yes' : 'no';
        }
    }
    runGameEngine($questions, $correctAnswers, TASK);
}
