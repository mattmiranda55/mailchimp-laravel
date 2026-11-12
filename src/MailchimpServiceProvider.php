<?php

namespace Mattmiranda55\MailchimpLaravel;

use Illuminate\Http\Client\Factory;
use Illuminate\Support\ServiceProvider;

class MailchimpServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/mailchimp.php', 'mailchimp');

        $this->app->singleton(MailchimpMarketing::class, function ($app) {
            $config = $app['config']['mailchimp'];

            return new MailchimpMarketing(
                $app->make(Factory::class),
                (string) $config['marketing']['api_key'],
                (string) $config['marketing']['server'],
                $config['marketing']['list_id'],
                $config['timeout'],
            );
        });

        $this->app->singleton(MailchimpTransactional::class, function ($app) {
            $config = $app['config']['mailchimp'];

            return new MailchimpTransactional(
                $app->make(Factory::class),
                (string) $config['transactional']['api_key'],
                $config['timeout'],
            );
        });

        $this->app->singleton(MailchimpManager::class, fn ($app) => new MailchimpManager(
            $app->make(MailchimpMarketing::class),
            $app->make(MailchimpTransactional::class),
        ));
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/mailchimp.php' => config_path('mailchimp.php'),
            ], 'mailchimp-config');
        }
    }
}
