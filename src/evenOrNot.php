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
 * @link      https://github.com/SergDanilov/php-project-45/blob/main/src/evenOrNot.php
 */
namespace Hexlet\Code\evenOrNot;

use function cli\line;
use function cli\prompt;

line("Welcome to the Brain Game!");
$name = prompt("May I have your name?");
line("Hello, %s!", $name);
line("Answer 'yes' if the number is even, otherwise answer 'no'.");
$win = 0;
for ($i = 0; $i < 3;) {
    $number = rand(1, 1000);
    line('Question: ' . $number);
    $answer = prompt("Your answer");
    if ($number % 2 === 0) {
        $correctAnswer = "yes";
    } else {
        $correctAnswer = "no";
    }
    if ($answer === $correctAnswer) {
        line("Correct!");
        $i++;
        $win++;
    } else {
        line("'{$answer}' is wrong answer ;(.");
        line("Correct answer was '{$correctAnswer}'.");
        line("Let's try again, " . $name . "!");
        break;
    }
}
if ($win == 3) {
    line("Congratulations {$name}!");
}
