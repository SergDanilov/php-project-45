<?php

/**
 * The game's goal is answer what part of arithmetic progression was missed.
 * php version 8.1.24
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Games/BrainProgression.php
 */

namespace Braingames\Games\BrainProgression;

use function Braingames\Engine\runGameEngine;

use const Braingames\Engine\ROUNDS_COUNT;
use const Braingames\Engine\RANDOM_START_NUM;
use const Braingames\Engine\RANDOM_END_NUM;

const TASK = 'What number is missing in the progression?';

function runGame()
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startProgression = rand(RANDOM_START_NUM, RANDOM_END_NUM);
        $stepProgression = rand(1, 10);
        $startProgressionIndex = rand(0, 4);

        $progression = [];
        for ($j = $startProgression, $k = $startProgressionIndex; $k < 10; $j = $j + $stepProgression) {
                $progression[$k] = $j;
                $k = $k + 1;
        }

        $missedProgressionIndex = rand(4, 9);
        $correctAnswers[$i] = $progression[$missedProgressionIndex];
        $progression[$missedProgressionIndex] = "..";

        $questions[$i] = implode(" ", $progression);
    }
    runGameEngine($questions, $correctAnswers, TASK);
}
