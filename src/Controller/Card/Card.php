<?php 

namespace App\Card;

class Card
{
    protected $value;

    public function __construct()
    {
        $this->value = null;
    }

    public function draw(): int
    {
        $this->value = random_int(1, $this->numberCards);
        return $this->value;
    }

    
    public function setValue(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getAsString(): string
    {
        if ($this->value <= 13) {
            return ("hjärter" . $this->value);
        } elseif ($this->value <=26) {
            return ("ruter" . ($this->value %13));
        } elseif ($this->value <=39) {
            return ("klöver" . ($this->value %13));
        } else {
            return ("spader" . ($this->value %13));
        }
    }
}
