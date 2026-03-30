<?php

declare(strict_types=1);

it('uses the configured application name on the welcome page', function (): void {
    config(['app.name' => 'Laravel Kit']);

    $this->get('/')
        ->assertOk()
        ->assertSee('Laravel Kit');
});
