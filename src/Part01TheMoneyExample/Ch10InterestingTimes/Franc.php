<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch10InterestingTimes;

class Franc extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
