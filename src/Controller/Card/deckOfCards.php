<?php

namespace App\Card;

use App\Card\CardGraphic;

class DeckOfCards
{
    public $deck = [];

    public function __construct()
    {
        $this->deck;
    } 

    public function makeDeck(): array
    {
        for ($i = 1; $i <= 52; $i++) {
            $card = new CardGraphic();
            $card->setValue($i);
            $card = $card->getAsString();
            $this->deck[] = $card;
        }
        return $this->deck;
    }
}
