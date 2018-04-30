<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        
        Schema::defaultStringLength(191);


        $this->app->singleton('system', function() {

            $user = \Auth::user();

            if(is_null($user)) {
                $system = \DB::table('systems')->find(1);
            } else {
                $system = \DB::table('systems')->find($user->systemID);
            }
            return $system;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
