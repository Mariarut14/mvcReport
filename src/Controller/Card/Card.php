<?php

/**
 * This file is about class Card.
 * The class constructs a playing card.
 *
 * (c) Maria Ståhlbom
 */

namespace App\Controller\Card;

/**
 * Methods:
 *  *__construct
 *  *setValue
 *  *getValue
 *  *getAsString
*/
class Card
{
    /**
     * @var int
    */
    protected $value;

    /**
     * Constructs Card.
     */
    public function __construct()
    {
        $this->value = 0;
    }

    /**
     * Sets value on Card
     *
     * @param int $value    Value on card.
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns value on card.
     *
     * @return int $value   Value on card.
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Converts value on card to string-version of card.
     * Value is the "color" + number between 1-13.
     *
     * @return string $string   Value of card as string.
     */
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
