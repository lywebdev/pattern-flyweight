<?php

declare(strict_types=1);

require_once 'CharacterInterface.php';

final readonly class Character implements CharacterInterface
{
    public function __construct(private string $symbol)
    {
    }

    public function render(): void
    {
        echo $this->symbol;
    }
}