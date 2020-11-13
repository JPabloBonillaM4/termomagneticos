<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function($view) {
            $view->with([
                'actual_route' => \Route::currentRouteName(),
                'times_cite' => [
                    '9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00',
                    '14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30'
                ]
            ]);
        });
    }
}
