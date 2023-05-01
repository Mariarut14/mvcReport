<?php

/**
 * This file is about class HandGame,
 * an instance of class Hand.
 * The class has methods used in card game 21.
 *
 * (c) Maria Ståhlbom
 */

namespace App\Card;

/**
 * Methods:
 *  *sum
 *  *propability
 *  *newCardInHand
 *  *bankPlay
*/

class HandGame extends Hand
{
    /**
     * Converts values of the card in handgame to
     * the values they have in the game and sums the new value.
     *
     * @return int $sum
     */
    public function sum(): int
    {
        $sum = 0;
        $isOne = false;
        $values = [];
        $values = $this->getValue();
        foreach ($values as $card) {
            $card = $card % 13;
            if ($card % 13 == 0 || $card % 13 >10) {
                $card = 10;
            } elseif ($card % 13 == 1) {
                $isOne = true;
                $card = 11;
            }
            $sum += $card;
        }
        if ($sum > 21 && $isOne) {
            $sum -= 10;
        }
        return $sum;
    }

    /**
     * Sums the value and counts the propabilty that a new
     * card from deck will lead to a new sum thats more than 21.
     *
     * @return float propability
     */

    public function propability(): float
    {
        $sum = $this->sum();
        $wantedNumber = 21 - $sum;
        $numLowCards = 0;
        foreach ($this->deck as $card) {
            $number = $card->getValue();
            $number = $number % 13;
            if ($number % 13 == 0 || $number % 13 > 10) {
                $number = 10;
            }
            if ($number <= $wantedNumber) {
                $numLowCards ++;
            }
        }
        $propNotBust = $numLowCards / count($this->deck);
        return 100 - round($propNotBust, 2) * 100;
    }


    /**
     * Takes away a card from deck and puts the card in hand.
     * Returns the changed deck.
     *
    *@param array<CardGraphic> $deck
    *@return array<CardGraphic> $deck
    */
    public function newCardInPlay($deck): array
    {
        $card = new CardGraphic();
        shuffle($deck);
        $value=array_splice($deck, 0, 1);
        $card = $value[0];
        $this->hand[] = $card;

        return $deck;
    }

    /**
     * Decides if bank should draw a new card
     * based on sum and propability.
     *
    * @return array<CardGraphic> $deck
    */
    public function bankPlay(): array
    {
        $sum = $this->sum();
        $propability = $this->propability();
        $deck = $this->deck;
        while ($sum < 17 || $propability < 50) {
            $deck = $this->newCardInPlay($deck);
            $sum = $this->sum();
            $propability = $this->propability();
        }
        return $deck;
    }
}
