<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase {

    public function testAboutShouldShowHelloLaravel(): void {
        $response = $this->get('/about/');

        $response->assertStatus(200);
        $response->assertSeeText('Hello, Laravel!');
    }
}
