<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch09TimesWeAreLivingIn;

class Franc extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
