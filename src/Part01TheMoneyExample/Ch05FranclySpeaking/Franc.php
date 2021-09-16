<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch05FranclySpeaking;

class Franc
{
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $franc): bool
    {
        return $this->amount === $franc->amount;
    }
}
