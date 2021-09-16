<?php

declare(strict_types=1);

namespace Tests\Part01heMoneyExample\Ch03EqualityForAll;

use PHPUnit\Framework\TestCase;
use TDDPHP\Part01TheMoneyExample\Ch03EqualityForAll\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);

        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
