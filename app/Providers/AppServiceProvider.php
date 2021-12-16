<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\post;
use App\Category;
use App\FlatType;
use Illuminate\Support\Facades\View;

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

         View::composer('frontEnd.includes.menu',function($view){
$publishedCategories = Category::where('publicationStatus',1)->get();
$view->with('publishedCategories',$publishedCategories);
        });


         View::composer('frontEnd.includes.menu',function($view){
$publishedFlatTypes = FlatType::where('publicationStatus',1)->get();
$view->with('publishedFlatTypes',$publishedFlatTypes);
        });

             View::composer('frontEnd.includes.menu',function($view){
$publishedFlatCategory = Category::where('publicationStatus',1)->get();
$view->with('publishedFlatCategory',$publishedFlatCategory);
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
