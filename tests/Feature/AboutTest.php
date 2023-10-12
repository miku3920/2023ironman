<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AboutTest extends TestCase {

    public function test_about_should_show_hello_laravel(): void {
        $response = $this->get('/about/');

        $response->assertStatus(200);
        $response->assertSeeText('Hello, Laravel!');
    }
}
