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

namespace Hexlet\Code\engine;

use function cli\line;
use function cli\prompt;

$backToGame = $homePath;

if ($answer == $correctAnswer) {
    line('Correct!');
    include_once $backToGame;
} else {
    line("'{$answer}' is wrong answer ;(.");
    line("Correct answer was '{$correctAnswer}'.");
    line("Let's try again, {$name}!");
    $gameOver = true;
    include_once $backToGame;
}
