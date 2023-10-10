<?php

declare(strict_types=1);

namespace miku\school;

class Student {

    public function __construct(
        public int $id,
        public string $name,
    ) {
    }

    public function addTwoNumber(int|float $num1, int|float $num2): int|float {
        return (float) bcadd((string) $num1, (string) $num2, 2);
    }

    // ...
}
