<?php

namespace Clevyr\FeedbackForm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasRoute('web');
    }

    public function packageBooted(): void {

        // Publish resources
        $this->publishes([
            __DIR__ . '/../resources/js/FeedbackForm.vue' => resource_path('js/Components/FeedbackForm.vue'),
        ], 'resources');
    }

}
