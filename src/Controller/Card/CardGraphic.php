<?php

namespace App\Card;

class CardGraphic extends Card
{
    protected string $representation = '&#1271';
    protected array $number = [53,54,55,56,57,58,59,60,61,
    62,63,65,66,69,70,71,72,73,74,75,76,77,78,
    79,81,82,85,86,87,88,89,90,91,92,93,94,95,97,
    98,37,38,39,40,41,42,43,44,45,46,47,49,50];

    public function __construct()
    {
        parent::__construct();
    }

    public function getAsString(): string
    {
        $cardString = ($this->representation . $this->number[$this->value - 1]);
        return $cardString;
    }
}
