<?php

namespace Clevyr\FeedbackForm\Tests;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase as Orchestra;
use Clevyr\FeedbackForm\FeedbackFormServiceProvider;

class TestCase extends Orchestra
{
    use WithWorkbench;

    protected $loadEnvironmentVariables = false;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Clevyr\\FeedbackForm\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function defineEnvironment($app): void
    {
        tap($app['config'])->set('app.key', 'AckfSECXIvnK5r28GVIWUAxmbBSjTavas');

        // Setup default database to use sqlite :memory:
        tap($app['config'], function (Repository $config) {
            $config->set('database.default', 'testbench');
            $config->set('database.connections.testbench', [
                'driver'   => 'sqlite',
                'database' => ':memory:',
                'prefix'   => '',
            ]);

            // Setup queue database connections.
            $config->set('queue.batching.database', 'testbench');
            $config->set('queue.failed.database', 'testbench',);
        });
    }

    protected function getPackageProviders($app): array
    {
        return [
            FeedbackFormServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-simple-feedback-form_table.php.stub';
        $migration->up();
        */
    }
}
