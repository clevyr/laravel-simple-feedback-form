<?php

use Clevyr\FeedbackForm\Notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

Route::post('simple-feedback', function (Request $request) {
    Notification::route('mail', config('simple-feedback-form.email'))
        ->notify(new Feedback($request->input()));
});
