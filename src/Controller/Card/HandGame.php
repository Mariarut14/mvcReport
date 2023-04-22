<?php

namespace App\Card;

class HandGame extends Hand
{
    public function sum(): int
    {
        $sum = 0;
        $isOne = false;
        $values = [];
        $values = $this->getValue();
        foreach ($values as $card) {
            $card = $card % 13;
            if ($card % 13 == 0 | $card % 13 >10) {
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

    public function propability(): float
    {
        $sum = $this->sum();
        $wantedNumber = 21 - $sum;
        $numLowCards = 0;
        foreach ($this->deck as $card) {
            $number = $card->getValue();
            $number = $number % 13;
            if ($number % 13 == 0 | $number % 13 > 10) {
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
    * @return array<CardGraphic> $deck
    */
    public function bankPlay(): array
    {
        $sum = $this->sum();
        $propability = $this->propability();
        $deck = $this->deck;
        while ($sum < 17 | $propability < 50) {
            $deck = $this->newCardInPlay($deck);
            $sum = $this->sum();
            $propability = $this->propability();
        }
        return $deck;
    }
}
