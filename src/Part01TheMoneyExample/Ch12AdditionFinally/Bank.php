<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch12AdditionFinally;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return Money::dollar(10);
    }
}
