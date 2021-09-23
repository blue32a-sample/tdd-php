<?php

declare(strict_types=1);

namespace Tests\Part01heMoneyExample\Ch13MakeIt;

use PHPUnit\Framework\TestCase;
use TDDPHP\Part01TheMoneyExample\Ch13MakeIt\Bank;
use TDDPHP\Part01TheMoneyExample\Ch13MakeIt\Money;
use TDDPHP\Part01TheMoneyExample\Ch13MakeIt\Sum;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = Money::dollar(5);

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals(Money::dollar(10), $five->times(2));
        // $this->assertEquals(Money::dollar(15), $five->times(3));
        $this->assertTrue(Money::dollar(10)->equals($five->times(2)));
        $this->assertTrue(Money::dollar(15)->equals($five->times(3)));
    }

    public function testEquality(): void
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
    }

    public function testcurrency(): void
    {
        $this->assertEquals('USD', Money::dollar(1)->currency());
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }

    public function testSimpleAddition(): void
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, 'USD');

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals(Money::dollar(10), $reduced);
        $this->assertTrue(Money::dollar(10)->equals($reduced));
    }

    public function testPlusReturnsSum(): void
    {
        $five = Money::dollar(5);
        $result = $five->plus($five);

        /** @var Sum $sum */
        $sum = $result;

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals($five, $sum->augend);
        // $this->assertEquals($five, $sum->addend);
        $this->assertTrue($five->equals($sum->augend));
        $this->assertTrue($five->equals($sum->addend));
    }

    public function testReduceSum(): void
    {
        $sum = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, 'USD');

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals(Money::dollar(7), $result);
        $this->assertTrue((Money::dollar(7))->equals($result));
    }

    public function testReduceMoney(): void
    {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1), 'USD');

        // JUnitのassertEqualsはobjectのequalsで比較する
        // $this->assertEquals(Money::dollar(1), $result);
        $this->assertTrue((Money::dollar(1))->equals($result));
    }
}
