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

namespace Hexlet\Code\Games\brainProgression;

use Hexlet\Code\greeting;
use Hexlet\Code\engine;

use function cli\line;
use function cli\prompt;

$greeting_part = __DIR__ . '/../../src/greeting.php';
$engine_part = __DIR__ . '/../../src/engine.php';
$homePath = __DIR__ . '/../../src/Games/brainProgression.php';

global $gameOver;
global $homePath;
global $name;

//greeting part
require_once $greeting_part;

//main part game
line('What number is missing in the progression?');
$win = 0;
$gameOver = 0;
for ($i = 0; $i < 3; $i++) {
    $startProgression = rand(0, 50);
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
    include $engine_part;
    if ($gameOver == 1) {
        break;
    } else {
        $win++;
    }
}
//winner
if ($win == 3) {
    line("Congratulations, {$name}!");
}
