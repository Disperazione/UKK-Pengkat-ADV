<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Auth;
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
        Paginator::useBootstrap();

        view()->composer('layouts.admin_partial.navbar',function($view){
            // $view->auth('')
            // $auth = Auth::guard('petugas')->user();
            // $admin = ;

            $view->with('petugas', Auth::guard('petugas')->user()); 


        });

        view()->composer('layouts.masyarakat_partial.navbar',function($view){
            // $view->auth('')
            // $auth = Auth::guard('petugas')->user();
            // $admin = ;

            $view->with('user', Auth::guard('masyarakat')->user()); 


        });
        
      
        view()->composer('layouts.admin_partial.sidebar',function($view){
            // $view->auth('')
            $view->with('petugas', Auth::guard('petugas')->user()); 

        });

        //
    }
}
