<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch14Change;

interface Expression
{
    public function reduce(Bank $bank, string $to): Money;
}
