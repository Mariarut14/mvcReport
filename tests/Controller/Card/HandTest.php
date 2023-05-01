<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Hand.
 */
class HandTest extends TestCase
{
    /**
     * Construct object.
     */
    public function testCreateObject()
    {
        $deck = new DeckOfCards();
        $deck->makeDeck();
        $deck = $deck->getDeck();
        $hand = new Hand($deck);
        $this->assertInstanceOf("\App\Card\Hand",$hand);
        $res = $hand->getValue();
        $exp = null;
        foreach ($res as $card) {
            $this->assertEquals($exp, $res);
        }
    }

    public function testAddCardGraphics()
    {
        $deck = new DeckOfCards();
        $deck->makeDeck();
        $deck = $deck->getDeck();
        $hand = new Hand($deck);
        for ($i=1; $i<=5; $i++) {
            $hand->add(new CardGraphic());
        }
        $hand = $hand->getValue();
        $exp = 5;
        $this->assertEquals($exp, count($hand));
    }
    public function testSetValue()
    {
        $deck = new DeckOfCards();
        $deck->makeDeck();
        $deck = $deck->getDeck();
        $hand = new Hand($deck);
        for ($i=1; $i<=5; $i++) {
            $hand->add(new CardGraphic());
        }
        $deck = $hand->setValue();
        foreach ($hand as $card) {
            $this->assertIsInt($card);
        }
        $expCountDeck = 47;
        $this->assertEquals($expCountDeck, count($deck));
    }
    public function testGetValue()
    {
        $deck = new DeckOfCards();
        $deck->makeDeck();
        $deck = $deck->getDeck();
        $hand = new Hand($deck);
        for ($i=1; $i<=5; $i++) {
            $hand->add(new CardGraphic());
        }
        $deck = $hand->setValue();
        $values = $hand->getValue();
        foreach ($values as $value) {
            $this->assertIsInt($value);
        }
    }
    public function testGetAsString()
    {
        $deck = new DeckOfCards();
        $deck->makeDeck();
        $deck = $deck->getDeck();
        $hand = new Hand($deck);
        for ($i=1; $i<=5; $i++) {
            $hand->add(new CardGraphic());
        }
        $deck = $hand->setValue();
        $res = $hand->getAsString();
        foreach ($res as $card) {
            $this->assertIsString($card);
        }
    }
}