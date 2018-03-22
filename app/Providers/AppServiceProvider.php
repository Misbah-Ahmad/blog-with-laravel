<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Carbon;

use App\Tag;
 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar', function($view){

            $tags = Tag::has('posts')->orderBy('name', 'asc')->get();

            return $view->with(compact('tags'));

        });

        Carbon::serializeUsing(function($carbon){

            return $carbon->format('d.m.y');

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
