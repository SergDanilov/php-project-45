<?php
/**
 * Greeting and getting to know the game user
 * php version 8.1.24
 *
 * This allows greeting with User and know his name.
 *
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/Cli.php
 */
namespace Hexlet\Code\Cli;

use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Games!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
