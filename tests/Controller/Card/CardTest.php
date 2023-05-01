<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Construct object.
     */
    public function testCreateObject()
    {
        $card = new Card();
        $this->assertInstanceOf("\App\Card\Card", $card);
        $res = $card->getValue();
        $exp = null;
        $this->assertEquals($exp, $res);
    }

    /**
     * Set value on card and assert value is int.
     */
    public function testSetValueCard()
    {
        $card = new Card();
        $card->setValue(10);

        $res = $card->getValue();
        $this->assertIsInt($res);

        $this->assertTrue($res === 10);
    }

    /**
     * Get value as string and assert value is string.
     */
    public function testGetAsStringValueHeart()
    {
        $card = new Card();
        $card->setValue(10);
        $res = $card->getAsString();
        $exp = "hjärter10";
        $this->assertIsString($res);
        $this->assertEquals($exp, $res);
    }
    public function testGetAsStringValueDiamonds()
    {
        $card = new Card();
        $card->setValue(20);
        $res = $card->getAsString();
        $exp = "ruter7";
        $this->assertIsString($res);
        $this->assertEquals($exp, $res);
    }
    public function testGetAsStringValueClubs()
    {
        $card = new Card();
        $card->setValue(30);
        $res = $card->getAsString();
        $exp = "klöver4";
        $this->assertIsString($res);
        $this->assertEquals($exp, $res);
    }
    public function testGetAsStringValueSpades()
    {
        $card = new Card();
        $card->setValue(50);
        $res = $card->getAsString();
        $exp = "spader11";
        $this->assertIsString($res);
        $this->assertEquals($exp, $res);
    }



}
