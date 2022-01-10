<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepositoryContract;
use App\Repositories\StaticUserRepository;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Container\Container;

class UserRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(UserRepositoryContract::class, function(Container $container){
            if(app()->environment('testing')) {
                return $container->make(StaticUserRepository::class);
            } 

            return $container->make(UserRepository::class);
        });
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

    // public $singletons = [
    //     UserRepositoryContract::class => UserRepository::class
    // ];
}
