<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> 1225555 (Thông tin phòng)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function register()
=======
     */
    public function register(): void
>>>>>>> 1225555 (Thông tin phòng)
    {
        //
    }

    /**
     * Bootstrap any application services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
=======
     */
    public function boot(): void
    {
        //
>>>>>>> 1225555 (Thông tin phòng)
    }
}
