<?php

namespace App\Card;

use App\Card\CardGraphic;

class DeckOfCards
{
    /**
    * @var array<CardGraphic> $deck
    */
    protected array $deck;

    public function __construct()
    {
        $this->deck = [];
    }

    public function makeDeck(): void
    {
        for ($i = 1; $i <= 52; $i++) {
            $card = new CardGraphic();
            $card->setValue($i);
            $this->deck[] = $card;
        }
    }
    /**
    * @return array<CardGraphic> $values
    */

    public function getDeck(): array
    {

        $values = [];
        foreach ($this->deck as $card) {
            $values[] = $card;
        }
        return $values;
    }

    /**
    * @return array<string> $value
    */
    public function getString(): array
    {
        $value=[];
        foreach ($this->deck as $card) {
            $value[] = $card->getAsString();
        }
        return $value;
    }
}
