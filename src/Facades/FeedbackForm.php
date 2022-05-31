<?php

namespace Clevyr\FeedbackForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Clevyr\FeedbackForm\FeedbackForm
 */
class FeedbackForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-simple-feedback-form';
    }
}
