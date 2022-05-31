<?php

namespace Clevyr\FeedbackForm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Clevyr\FeedbackForm\Commands\FeedbackFormCommand;

class FeedbackFormServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-simple-feedback-form')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-simple-feedback-form_table')
            ->hasCommand(FeedbackFormCommand::class);
    }
}
