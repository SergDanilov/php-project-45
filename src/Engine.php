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
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line();
    line($task);
    line();
    foreach ($questions as $key => $question) {
        line("Question: %s", $question);
        $answer = prompt("Your answer");
        if ($answer != $correctAnswers[$key]) {
            line("'{$answer}' is wrong answer ;(.");
            line("Correct answer was '{$correctAnswers[$key]}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}
