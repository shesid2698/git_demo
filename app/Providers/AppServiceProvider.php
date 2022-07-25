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
        view()->share(['math1' => [1, 2, 3, 4, 5, 6, 7, 8, 9], 'math2' => [1, 2, 3, 4, 5, 6, 7, 8, 9], 'name2' => 'sid2', 'name3' => 'spider man']);
        view()->share('content', '測試測試');
    }
}
