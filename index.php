<?php

/**
 * Реализация паттерна легковес на языке программирования PHP
 * Flyweight Pattern Implementation in PHP
 * | RU: В качестве примера будет система отображения текста. Каждая буква - объект, и таких объектов может быть очень
 * много (столько, сколько символов на странице). Вместо создания отдельных объектов для каждой буквы, мы можем
 * использовать паттерн Легковес, чтобы создать объект для каждой уникальной буквы только один раз.
 * | EN: As an example, let's consider a text display system. Each letter is an object, and there can be many such objects
 * (as many as there are characters on the page). Instead of creating separate objects for each letter, we can use the
 * Flyweight pattern to create an object for each unique letter only once.
 */

declare(strict_types=1);

require_once 'CharacterFactory.php';

$characterFactory = new CharacterFactory();

$characters = [
    $characterFactory->getCharacter('F'),
    $characterFactory->getCharacter('l'),
    $characterFactory->getCharacter('y'),
    $characterFactory->getCharacter('w'),
    $characterFactory->getCharacter('e'),
    $characterFactory->getCharacter('i'),
    $characterFactory->getCharacter('g'),
    $characterFactory->getCharacter('h'),
    $characterFactory->getCharacter('t'),
    $characterFactory->getCharacter(' '),
    $characterFactory->getCharacter('p'),
    $characterFactory->getCharacter('a'),
    $characterFactory->getCharacter('t'),
    $characterFactory->getCharacter('t'),
    $characterFactory->getCharacter('e'),
    $characterFactory->getCharacter('r'),
    $characterFactory->getCharacter('n'),
];

$charactersMessage = '';
foreach ($characters as $character) {
    $charactersMessage .= $character->render();
}

echo $charactersMessage;