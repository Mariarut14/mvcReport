<?php

namespace App\Controller\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class HandGame.
 */
class HandGameTest extends TestCase
{
    /**
     * Count sum on hand and assert value is correct.
     */
    public function testSum(): void
    {
        $deck = [];
        for ($i=1; $i<=3; $i++) {
            $deck[] = new CardGraphic();
        }
        $i = 8;
        foreach ($deck as $card) {
            $card->setValue($i);
            $i+=3;
        }
        $hand = new HandGame($deck);
        for ($i=1; $i<=3; $i++) {
            $hand->add(new CardGraphic());
        }
        $hand->setValue();
        $sum = $hand->sum();
        $expSum = 19;
        $this->assertEquals($expSum, $sum);
    }

    /**
     * Count propability and check value is between 0 and 100.
     */
    public function testPropability(): void
    {
        $deck = new DeckOfCards();
        $deck->makeDeck();
        $deck = $deck->getDeck();
        $hand = new HandGame($deck);
        for ($i=1; $i<=3; $i++) {
            $hand->add(new CardGraphic());
        }
        $hand->setValue();
        $propability = $hand->propability();
        $this->assertLessThanOrEqual(100, $propability);
        $this->assertGreaterThanOrEqual(0, $propability);
    }


    /**
    * Draw card from deck into hand and assert hand has got one more card.
    */
    public function testNewCardInPlay(): void
    {
        $deck = new DeckOfCards();
        $deck->makeDeck();
        $deck = $deck->getDeck();
        $hand = new HandGame($deck);
        for ($i=1; $i<=2; $i++) {
            $hand->add(new CardGraphic());
        }
        $deck = $hand->setValue();
        $deck= $hand->newCardInPlay($deck);
        $values = $hand->getValue();
        $this->assertCount(3, $values);
        $this->assertCount(49, $deck);
    }

    /**
    * Test if sum is more than 16 or propability more than 50 after bankPlay-function.
    */
    public function testBankPlay(): void
    {
        $deck = [];
        for ($i=1; $i<=4; $i++) {
            $deck[] = new CardGraphic();
        }
        $i = 6;
        foreach ($deck as $card) {
            $card->setValue($i);
            $i+=13;
        }
        $hand = new HandGame($deck);
        for ($i=1; $i<=2; $i++) {
            $hand->add(new CardGraphic());
        }
        $hand->setValue();
        $hand->bankPlay();
        $sum = $hand->sum();
        $propability = $hand->propability();
        $assert = false;

        if ($sum >= 17  || $propability >= 50) {
            $assert = true;
        }
        $this->assertTrue($assert);
    }
}
