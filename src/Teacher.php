<?php

declare(strict_types=1);

namespace miku\school;

class Teacher {
    public function __construct(
        public int $id,
        public string $name,
    ) {
    }
    // ...
}
