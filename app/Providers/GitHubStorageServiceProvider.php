<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Radiergummi\FlysystemGitHub\Client;
use Radiergummi\FlysystemGitHub\GitHubAdapter;
use League\Flysystem\Filesystem;

class GitHubStorageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        \Storage::extend('ghcs', function($app, $config){
            $client = new Client($config['authorization_token'], $config['repository']);
            $adapter = new GitHubAdapter($client);
            return new Filesystem($adapter);
        });
    }
}
