<?php

declare(strict_types=1);

it('should show "Hello, Laravel!"', function (): void {
    $response = $this->get('/about/');

    $response->assertStatus(200);
    $response->assertSeeText('Hello, Laravel!');
});
