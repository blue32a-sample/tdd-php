<?php

declare(strict_types=1);

namespace Tests\Part01heMoneyExample\Ch05FranclySpeaking;

use PHPUnit\Framework\TestCase;
use TDDPHP\Part01TheMoneyExample\Ch05FranclySpeaking\Franc;
use TDDPHP\Part01TheMoneyExample\Ch05FranclySpeaking\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals(new Dollar(10), $five->times(2));
        // $this->assertEquals(new Dollar(15), $five->times(3));
        $this->assertTrue((new Dollar(10))->equals($five->times(2)));
        $this->assertTrue((new Dollar(15))->equals($five->times(3)));
    }

    public function testEquality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }

    public function testFrancMultiplication(): void
    {
        $five = new Franc(5);

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals(new Franc(10), $five->times(2));
        // $this->assertEquals(new Franc(15), $five->times(3));
        $this->assertTrue((new Franc(10))->equals($five->times(2)));
        $this->assertTrue((new Franc(15))->equals($five->times(3)));
    }
}
