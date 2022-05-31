<?php

use App\Notifications\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

Route::post('feedback', function (Request $request) {
    Notification::route('mail', config('feedback.email'))
        ->notify(new Feedback($request->input()));
});