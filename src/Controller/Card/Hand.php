<?php

namespace App\Card;

use App\Card\CardGraphic;

class Hand
{
    private $hand = [];

    public function __construct(array $deck)
    {
        $this->deck = $deck;
    }

    public function add(Cardgraphic $card)
    {
        $this->hand[] = $card;
    }

    public function setValue(): array
    {
        foreach ($this->hand as $card) {
            shuffle($this->deck);
            $value=array_splice($this->deck, 0, 1);
            $value=$value[0]->getValue();
            $card->setValue($value);
        }
        return $this->deck;
    }

    public function getValue(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getValue();
        }
        return $values;
    }

    public function getAsString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }
}
