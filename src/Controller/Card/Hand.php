<?php

namespace App\Card;

use App\Card\CardGraphic;

class Hand
{
    /**
    * @var array<CardGraphic> $hand
    */
    protected array $hand = [];

    /**
    * @var array<CardGraphic> $deck
    */

    protected array $deck = [];

    /**
    * @param array<CardGraphic> $deck
    */
    public function __construct(array $deck)
    {
        $this->deck = $deck;
    }

    public function add(CardGraphic $card): void
    {
        $this->hand[] = $card;
    }

    /**
    * @return array<CardGraphic> $this->deck
    */
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

    /**
    * @return array<int> $values
    */
    public function getValue(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getValue();
        }
        return $values;
    }

    /**
    * @return array<string> $values
    */
    public function getAsString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }
}
