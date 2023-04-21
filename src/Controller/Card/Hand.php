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

    public function add(CardGraphic $card)
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

    public function sum(): int
    {
        $sum = 0;
        $isOne = False;
        $values = [];
        $values = $this->getValue();
        foreach ($values as $card) {
            if ($card % 13 == 0 | $card % 13 >10 ) {
                $card = 10;
            } elseif ($card % 13 == 1) {
                $isOne = True;
                $card = 11;
            } else {
                $card = $card % 13;
            }
            $sum += $card;
        }
        If ($sum > 21 && $isOne) {
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
            if ($number % 13 == 0 | $number % 13 > 10 ) {
                $number = 10;
            } else {
                $number = $number % 13;
            }
            if ($number <= $wantedNumber) {
                $numLowCards ++;
            }
        }
        $propNotBust = $numLowCards / count($this->deck);
        return 100 - round($propNotBust, 2) * 100;
    }


    public function newCardInPlay($deck): array
    {
        $card = new CardGraphic;
        shuffle($deck);
        $value=array_splice($deck, 0, 1);
        $card = $value[0];
        $this->hand[] = $card;

        return $deck;
    }

    public function bankPlay(): array
    {
        $bankPlay = False;
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