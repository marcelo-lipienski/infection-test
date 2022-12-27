<?php

namespace Test;

use App\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function testPositiveNumbers()
    {
        $sum = new Sum(1, 1);

        $this->assertSame(2, $sum->total());
    }
}