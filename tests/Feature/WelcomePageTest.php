<?php

declare(strict_types=1);

it('uses the configured application name on the welcome page', function (): void {
    $this->get('/')
        ->assertOk()
        ->assertSee(config('app.name'));
});
