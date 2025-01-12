<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        //запись логов вызваных методов в бд
        DB::listen(function ($query) {
            logger()->info("SQL: {$query->sql}");
            logger()->info("Bindings: " . implode(', ', $query->bindings));
        });

        //ограничение на кол-во запросов
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(10)->by($request->user()?->id ?: $request->ip())->response(function (Request $request, $headers) {
                return response()->json(['message' => 'Too many attempts'], 429);
            });
        });
    }
}
