<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DeckOfCards.
 */
class DeckOfCardsTest extends TestCase
{
    /**
     * Construct object.
     */
    public function testGetString(): void
    {
        $deck = new DeckOfCards();
        $deck->makeDeck();
        $deck = $deck->getString();
        $expString = $deck[rand(1, 52)];
        $this->assertContains($expString, $deck);
    }
}
