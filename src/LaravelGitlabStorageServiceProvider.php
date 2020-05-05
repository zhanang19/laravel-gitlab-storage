<?php

namespace Zhanang19\LaravelGitlabStorage;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use RoyVoetman\FlysystemGitlab\Client;
use RoyVoetman\FlysystemGitlab\GitlabAdapter;

class LaravelGitlabStorageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        Storage::extend('gitlab', function ($app, $config) {
            $client = new Client(
                $config['personal_access_token'],
                $config['project_id'],
                $config['branch'],
                $config['base_url']
            );

            return new Filesystem(new GitlabAdapter($client, '', $config['debug']));
        });
    }

    /**
     * Register any package services.
     */
    public function register()
    {
        //
    }
}
