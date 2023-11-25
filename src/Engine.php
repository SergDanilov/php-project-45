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

function engine_part($name, $answer, $correctAnswer)
{
    if ($answer == $correctAnswer) {
        line('Correct!');
    } else {
        line("'{$answer}' is wrong answer ;(.");
        line("Correct answer was '{$correctAnswer}'.");
        line("Let's try again, {$name}!");
        exit;
    }
}
