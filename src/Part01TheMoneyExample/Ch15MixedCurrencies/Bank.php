<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch15MixedCurrencies;

class Bank
{
    /** @var array<Pair,int> $rates */
    private array $rates = [];

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate)
    {
        $this->rates[(new Pair($from, $to))->hashCode()] = $rate;
    }

    public function rate(string $from, string $to): int
    {
        if ($from === $to) {
            return 1;
        }
        return $this->rates[(new Pair($from, $to))->hashCode()];
    }
}
