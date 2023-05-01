<?php

/**
 * This file is about class Hand,
 * a composition of class CardGraphic.
 * The class constructs a hand of playing card.
 *
 * (c) Maria Ståhlbom
 */

namespace App\Controller\Card;

use App\Controller\Card\CardGraphic;

/**
 * Methods:
 *  *__construct
 *  *add
 *  *setValue
 *  *getValue
 *  *getAsString
*/

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

    /**
     * Adds CardGraphic to hand
     *
     * @param $card
     */
    public function add(CardGraphic $card): void
    {
        $this->hand[] = $card;
    }

    /**
    * Takes card from deck and sets their value on cards in hand.
    * Returns deck without the taken cards.
    *
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
    * Get values from hand in an array.
    *
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
    * Return an array of cards in a graphic form of string.
    *
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
