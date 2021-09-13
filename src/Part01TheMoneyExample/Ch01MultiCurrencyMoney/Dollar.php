<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch01MultiCurrencyMoney;

class Dollar
{
    public int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): void
    {
        $this->amount *= $multiplier;
    }
}
