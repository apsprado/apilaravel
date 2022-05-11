<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/*Inerfaces*/
use App\Interfaces\ProductInterface;
use App\Interfaces\Abstracts\AbstractInterface;

/*Repository*/
use App\Repositories\ProductRepository;
use App\Repositories\Abstracts\AbstractRepository;

class RepositoryServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AbstractInterface::class,
            AbstractRepository::class,
        );

        $this->app->bind(
            ProductInterface::class,
            ProductRepository::class,
        );
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
