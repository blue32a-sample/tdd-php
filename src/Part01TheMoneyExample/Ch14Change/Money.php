<?php

declare(strict_types=1);

namespace TDDPHP\Part01TheMoneyExample\Ch14Change;

class Money implements Expression
{
    protected int $amount;
    protected string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function plus(Money $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }

    /**
     * Return amount
     *
     * Javaのprotectedは、同じパッケージ内であれば自由にアクセスできる。
     * PHPではアクセス出来ないケースがあるのでgetterを実装する。
     */
    public function amount(): int
    {
        return $this->amount;
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && $this->currency() === $money->currency();
    }

    /**
     * to string
     *
     * デバッグ出力のため（第１０章　テストに聞いてみる）
     */
    public function __toString(): string
    {
        return $this->amount . ' ' . $this->currency;
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }
}
