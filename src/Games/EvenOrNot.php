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

use function Braingames\Engine\engine_part;
use function Braingames\Greeting\welcome;
use function cli\line;
use function cli\prompt;

use const Braingames\Engine\ROUNDS_COUNT;

const TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function runBrainEven()
{
    //greeting
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    //main part game
    line(TASK);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(1, 1000);
        line('Question: ' . $number);
        $answer = prompt("Your answer");
        ($number % 2 === 0) ? $correctAnswer = 'yes' : $correctAnswer = 'no';

        engine_part($name, $answer, $correctAnswer);
    }
    //winner
    line("Congratulations, {$name}!");
}
