<?php

namespace Clevyr\FeedbackForm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
// use Clevyr\FeedbackForm\Commands\FeedbackFormCommand;

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
            ->hasRoute('web')

            // ->hasViews()
            // ->hasMigration('create_laravel-simple-feedback-form_table')
            // ->hasCommand(FeedbackFormCommand::class);
            ;
    }

    public function packageBooted(): void {
        // Publish routes
        // $this->loadRoutesFrom(__DIR__ . '../routes/feedback.php');

        // Publish notifications
        // $this->publishes([
        //     __DIR__ . '/Notifications/Feedback.php' => app_path('Notifications/Feedback.php'),
        // ], 'notifications');

        // Publish resources
        $this->publishes([
            __DIR__ . '/../resources/js/FeedbackForm.vue' => resource_path('js/Components/FeedbackForm.vue'),
        ], 'resources');
    }

}
