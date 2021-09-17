<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch07ApplesAndOranges;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }
}
