<?php

/**
 * This allows greeting with User and know his name.
 * The games goal is answer what part of arithmetic progression was missed.
 * php version 8.1.24
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Games/brainProgression.php
 */

namespace Braingames\Games\brainProgression;

use function Braingames\Engine\engine_part;
use function cli\line;
use function cli\prompt;

use const Braingames\Engine\ROUNDS_COUNT;

const TASK = 'What number is missing in the progression?';

function runBrainProgression()
{
    //greeting
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    //main part game
    line(TASK);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startProgression = rand(0, 100);
        $step = rand(1, 10);
        $count = rand(0, 4);
        $missedIndex = rand(4, 9);
        $arrProgression = [];

        for ($j = $startProgression, $k = $count; $k < 10; $j = $j + $step) {
                $arrProgression[$k] = $j;
                $k = $k + 1;
        }

        $correctAnswer = $arrProgression[$missedIndex];
        $arrProgression[$missedIndex] = "..";
        $progression = implode(" ", $arrProgression);

        line("Question: {$progression}");
        $answer = prompt("Your answer");

        engine_part($name, $answer, $correctAnswer);
    }
    //winner
    line("Congratulations, {$name}!");
}
