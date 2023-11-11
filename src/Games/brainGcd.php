<?php
/**
 * This allows greeting with User and know his name.
 * Then calculation greatest common divisor by two randoms numbers.
 * After that comparing user's answer with correct answer.
 * php version 8.1.24
 * 
 * @category  LearnProject
 * @package   Phpproject
 * @author    Sergey Danilov <danilovserg1985s@gmail.com>
 * @copyright 2023 Sergey Danilov
 * @license   no Licence
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/brainGcd.php
 */
namespace Hexlet\Code\Games\brainGcd;

use Hexlet\Code\greeting;
use Hexlet\Code\engine;

use function cli\line;
use function cli\prompt;

$greeting_part = __DIR__ . '/../../src/greeting.php';
$engine_part = __DIR__ . '/../../src/engine.php';
$homePath = __DIR__ . '/../../src/Games/brainGcd.php';

global $gameOver;
global $homePath;

//greeting part
require_once $greeting_part;

//main part game
line("Find the greatest common divisor of given numbers.");
$win = 0;
$gameOver = false;
for ($i = 0; $i < 3;) {

    $numberOne = rand(1, 50);
    $numberTwo = rand(1, 50);

    $operatorArray = ["+","-","*"];
    $indexRandom = rand(0, 2);
    $operator = $operatorArray[$indexRandom];
    switch ($operator) {
    case "+":
        $correctAnswer = $numberOne + $numberTwo;
        break;
    case "-":
        $correctAnswer = $numberOne - $numberTwo;
        break;
    case "*":
        $correctAnswer = $numberOne * $numberTwo;
        break;
    }
    
    line("Question: {$numberOne} {$operator} {$numberTwo}");
    $answer = (int)prompt("Your answer");

    include $engine_part;
    if ($gameOver) {
        break;
    }
}
//winner
if ($win == 3) {
    line("Congratulations, {$name}!");
}