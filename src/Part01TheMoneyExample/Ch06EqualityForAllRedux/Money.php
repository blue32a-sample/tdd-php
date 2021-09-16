<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch06EqualityForAllRedux;

class Money
{
    protected int $amount;

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount;
    }
}
