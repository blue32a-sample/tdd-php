<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch13MakeIt;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($to);
    }
}
