<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch13MakeIt;

interface Expression
{
    public function reduce(string $to): Money;
}
