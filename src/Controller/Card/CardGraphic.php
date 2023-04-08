<?php

namespace App\Card;

class CardGraphic extends Card
{
    private $representation = '&#1271';
    private $number = [53,54,55,56,57,58,59,60,61,
    62,63,65,66,69,70,71,72,73,74,75,76,77,78,
    79,81,82,85,86,87,88,89,90,91,92,93,94,95,97,
    98,37,38,39,40,41,42,43,44,45,46,47,49,50];

    public function __construct()
    {
        parent::__construct();
    }

    public function getAsString(): string
    {
        $this->representation = ($this->representation . $this->number[$this->value - 1]);
        return $this->representation;
    }
        
        /**if ( $this->value <=13 ) {
            $this->representation = ($this->representation . ($this->value + 53) . ';');
            return $this-> representation;
        } elseif ( $this->value <=26 ) {
            $this->representation = ($this->representation . (($this->value % 13) + 69). ';');
            return $this-> representation;
        } elseif ( $this->value <=39 ) {
            $this->representation = ($this->representation . (($this->value % 13)+ 85) . ';');
            return $this-> representation;
        } else {
            $this->representation = ($this->representation . (($this->value % 13) + 37) . ';');
            return $this-> representation;
        }
    }*/
}
