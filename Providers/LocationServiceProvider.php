<?php

namespace  Modules\Location\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Modules\Location\Location;

class LocationServiceProvider extends ServiceProvider
{

    public function boot()
    {
    
        Route::group(['middleware'=>'web'], function(){
            require  __DIR__. '/../Routes/web.php';
        });
        
      

    }

    public function register()
    {
        $this->app->singleton('Location.location',function(){
            //$config = $app['config']->get('pages.home');
            return new Location('pt-br');
        });
    }
}