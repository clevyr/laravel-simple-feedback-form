<?php

use Clevyr\FeedbackForm\Notifications\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::post('simple-feedback', function (Request $request) {

    // Apply validation to the incoming request
    $validated = Validator::make($request->input(), [
        'name' => [
            'required',
            'string',
            'max:255'
        ],
        'email' => [
            'nullable',
            'string',
            'email',
            'max:255',
        ],
        'phone' => [
            'nullable',
            'string',
        ],
        'comment' => [
            'required',
            'string',
        ]
    ])->validate();

    // send the notification to the configured email
    Notification::route('mail', config('simple-feedback-form.email'))
        ->notify(new Feedback($validated));
});
