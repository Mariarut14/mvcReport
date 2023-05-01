<?php

/**
 * This file is about class DeckOfCards,
 * a composition of class CardGraphic.
 * The class constructs a deck of playing cards.
 *
 * (c) Maria Ståhlbom
 */

namespace App\Controller\Card;

use App\Controller\Card\CardGraphic;

/**
 * Methods:
 *  *__construct
 *  *add
 *  *makeDeck
 *  *getDeck
 *  *getString
*/


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

    /**
     * Makes a full deck of 52 CardGraphics with value 1-52.
     */

    public function makeDeck(): void
    {
        for ($i = 1; $i <= 52; $i++) {
            $card = new CardGraphic();
            $card->setValue($i);
            $this->deck[] = $card;
        }
    }

    /**
    * Get array of values of all cards in the deck.
    *
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
    * Returns values of deck as graphic form in string.
    *
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
