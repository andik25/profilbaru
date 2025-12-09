<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin', function(User $user){
            return $user->tingkat === '0';
        });

        Gate::define('desa', function(User $user){
            return $user->tingkat === '3';
        });

        Gate::define('kecamatan', function(User $user){
            return $user->tingkat === '2';
        });
        
        Gate::define('dinkes', function(User $user){
            return $user->tingkat === '1';
        });

        Gate::define('rs', function(User $user){
            return $user->tingkat === '4';
        });
        
        Gate::define('pj_pkm', function(User $user){
            return $user->tingkat === '5';
        });

        Gate::define('pj_dinkes', function(User $user){
            return $user->tingkat === '6';
        });

        Gate::define('super_admin', function(User $user){
            return $user->tingkat === '7';
        });
    }
}
