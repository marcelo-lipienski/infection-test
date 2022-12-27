<?php

namespace App;

class Sum
{
    public function __construct(
        protected int $a = 0,
        protected int $b = 0
    ) { }

    public function total(): int
    {
        return $this->a + $this->b;
    }
}