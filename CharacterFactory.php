<?php

declare(strict_types=1);

require_once 'Character.php';

final class CharacterFactory
{
    private array $characters = [];

    public function getCharacter(string $symbol): Character
    {
        if (!isset($this->characters[$symbol])) {
            $this->characters[$symbol] = new Character($symbol);
        }

        return $this->characters[$symbol];
    }
}