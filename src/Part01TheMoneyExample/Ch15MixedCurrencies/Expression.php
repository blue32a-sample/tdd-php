<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch15MixedCurrencies;

interface Expression
{
    public function plus(Expression $addend): Expression;
    public function reduce(Bank $bank, string $to): Money;
}
