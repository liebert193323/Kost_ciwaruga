<?php

namespace App\Providers;

use App\Filament\Resources\UserResource; // Import resource yang benar
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Tidak perlu mendaftarkan resource di sini
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Mendaftarkan resource ke Filament
        UserResource::class;
    }
}
