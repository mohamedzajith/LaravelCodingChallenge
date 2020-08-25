<?php

namespace App\Providers;

use App\Interfaces\ArticleInterface;
use App\Interfaces\AuthorInterface;
use App\Repositories\ArticleRepository;
use App\Repositories\AuthorRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthorInterface::Class, AuthorRepository::Class);
        $this->app->bind(ArticleInterface::Class, ArticleRepository::Class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}