<?php

namespace App\Providers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator; // Import the Validator facade
use Illuminate\Support\ServiceProvider;
use Illuminate\pagination\paginator;
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
    public function boot()
    {
        Validator::extend('validate_weekend_date', function ($attribute, $value, $parameters, $validator) {
            $date = Carbon::parse($value);
            return $date->isWeekend();
        });

        paginator::useBootstrapFive();
    }
}
