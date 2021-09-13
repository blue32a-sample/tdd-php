<?php

declare(strict_types=1);

namespace Tests\Part01heMoneyExample\Ch01MultiCurrencyMoney;

use PHPUnit\Framework\TestCase;
use TDDPHP\Part01TheMoneyExample\Ch01MultiCurrencyMoney\Dollar;

class DollerTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}
