<?php

/**
 * Greeting. Asking user's name and saying 'Hello'.
 * php version 8.1.24
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Games/evenOrNot.php
 */

namespace Braingames\Wellcome;

use function cli\line;
use function cli\prompt;

function runWellcome()
{
    //greeting
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
