<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Pants;
use App\Shorts;
use App\Shirts;
use App\Category;

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
        view()->composer('nav',function($view){

            $pants=Pants::all();
            $shorts=Shorts::all();
            $shirts=Shirts::all();
            $view->with('pants',$pants)->with('shirts',$shirts)->with('shorts',$shorts);
    });
        view()->composer('footer',function($view){

        
            $category=Category::all();
            
            $view->with('category',$category);
        });
        view()->composer('nav',function($view){

        
            $category=Category::all();
            
            $view->with('category',$category);
        });

    }
    
    
}
