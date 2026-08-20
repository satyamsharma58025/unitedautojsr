<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });

        view()->share(
            'categories',
            Category::with('subcategories')
                ->where('status', 'yes')
                ->get()
        );
    }
}
