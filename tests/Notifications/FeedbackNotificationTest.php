<?php

namespace Tests\Notifications;

use Illuminate\Support\Facades\Notification;

it('sends a notification', function () {
    Notification::fake();

    $this->post('simple-feedback', [
        'name' => 'Test Name',
        'email' => 'test@example.com',
        'comment' => 'Test Comment',
    ])->assertOk();

    Notification::assertCount(1);
});
