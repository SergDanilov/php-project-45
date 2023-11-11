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
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/evenOrNot.php
 */
namespace Hexlet\Code\evenOrNot;

use Hexlet\Code\engine;
use Hexlet\Code\greeting;

use function cli\line;
use function cli\prompt;


$greeting_part = __DIR__ . '/../src/greeting.php';
$engine_part = __DIR__ . '/../src/engine.php';
$homePath = __DIR__ . '/../src/evenOrNot.php';

global $gameOver;
global $homePath;

//greeting part
require_once $greeting_part;

//main part game
line("Answer 'yes' if the number is even, otherwise answer 'no'.");
$win = 0;
$gameOver = false;
for ($i = 0; $i < 3;) {
    $number = rand(1, 1000);
    line('Question: ' . $number);
    $answer = prompt("Your answer");
    if ($number % 2 === 0) {
        $correctAnswer = "yes";
    } else {
        $correctAnswer = "no";
    }
    include $engine_part;
    if ($gameOver) {
        break;
    }
}
//winner
if ($win == 3) {
    line("Congratulations, {$name}!");
}
