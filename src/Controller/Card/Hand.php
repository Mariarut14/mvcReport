<?php

namespace App\Card;

use App\Card\CardGraphic;

class Hand
{
    private $hand = [];

    public function add(Cardgraphic $card)
    {
        $this->hand[] = $card;
    }

    public function draw()
    {
        foreach ($this->hand as $card) {
            $card->draw();
        }    
    }
        
    public function setValue(): array
    {
        foreach ($this->hand as $card) {
            $card->setValue();
        }  
    }

    public function getValue(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getValue();
        }
    }

    public function getAsString(): string
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = card->getAsString();
        }    

    }
}
