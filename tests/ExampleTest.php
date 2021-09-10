<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use TDDPHP\Example;

class ExampleTest extends TestCase
{
    public function testHoge()
    {
        $this->assertEquals('hoge', Example::hoge());
    }
}
