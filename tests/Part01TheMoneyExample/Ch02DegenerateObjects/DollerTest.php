<?php

declare(strict_types=1);

namespace Tests\Part01heMoneyExample\Ch02DegenerateObjects;

use PHPUnit\Framework\TestCase;
use TDDPHP\Part01TheMoneyExample\Ch02DegenerateObjects\Dollar;

class DollerTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);

        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
}
