<?php

declare(strict_types=1);

namespace miku\school;

use PHPUnit\Framework\TestCase;
use miku\school\Student;

final class StudentTest extends TestCase {

    public function testCanAddTwoNumberInt(): void {
        $student = new Student(1, 'miku');

        $this->assertEquals(3, $student->addTwoNumber(1, 2));
    }

    public function testCanAddTwoNumberFloat(): void {
        $student = new Student(1, 'miku');

        $this->assertEquals(0.3, $student->addTwoNumber(0.1, 0.2));
    }
}
