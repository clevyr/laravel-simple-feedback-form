<?php

namespace Clevyr\FeedbackForm\Commands;

use Illuminate\Console\Command;

class FeedbackFormCommand extends Command
{
    public $signature = 'laravel-simple-feedback-form';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
