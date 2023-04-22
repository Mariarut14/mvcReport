<?php

namespace App\Card;

class Card
{
    protected int $value;

    public function __construct()
    {
        $this->value = 0;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getAsString(): string
    {
        $string = ("spader" . ($this->value %13));
        if ($this->value <= 13) {
            $string = ("hjärter" . $this->value);
        } elseif ($this->value <=26) {
            $string = ("ruter" . ($this->value %13));
        } elseif ($this->value <=39) {
            $string = ("klöver" . ($this->value %13));
        }
        return $string;
    }
}
