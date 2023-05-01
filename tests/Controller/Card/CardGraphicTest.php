<?php

namespace App\Controller\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardGraphic.
 */
class CardGraphicTest extends TestCase
{
    /**
     * Construct object.
     */
    public function testCreateObject(): void
    {
        $card = new CardGraphic();
        $this->assertInstanceOf("\App\Controller\Card\CardGraphic", $card);
        $res = $card->getValue();
        $exp = null;
        $this->assertEquals($exp, $res);
    }

    /**
     * Get value as string and assert value is string.
     */
    public function testGetAsString(): void
    {
        $card = new CardGraphic();
        $card->setValue(10);
        $res = $card->getAsString();
        $this->assertIsString($res);
    }
}
