<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate definitions for protected routes
        Gate::define('viewEmployeeDashboard', function ($user) {
            return $user->hasRole('Employee');
        });

        Gate::define('viewAdminDashboard', function ($user) {
            return $user->hasRole('Admin');
        });
    }
}
