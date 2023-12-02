<?php

/**
 * Engine it is a same part of each game
 * php version 8.1.24
 *
 * This allows use same code in each game
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/engine.php
 */

namespace Braingames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;
const RANDOM_START_NUM = 1;
const RANDOM_END_NUM = 100;

function runGameEngine(array $questions, array $correctAnswers, string $task)
{
    //greeting
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    // game task
    line();
    line($task);
    line();
    // questions
    for ($k = 0; $k < ROUNDS_COUNT; $k++) {
        line("Question: " . $questions[$k]);
        $answer = prompt("Your answer");
        if ($answer == $correctAnswers[$k]) {
            line('Correct!');
        } else {
            // loser
            line("'{$answer}' is wrong answer ;(.");
            line("Correct answer was '{$correctAnswers[$k]}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    // winner
    line("Congratulations, {$name}!");
}
