<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Product\Domain\Contracts\ProductRepositoryContract;
use Src\Product\Infrastructure\Repositories\EloquentProductRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            ProductRepositoryContract::class,
            EloquentProductRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
