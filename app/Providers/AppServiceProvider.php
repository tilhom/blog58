<?php

namespace App\Providers;

use App\Category;
use App\Post;
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
        view()->composer('frontend.partials.sidebar', function($view){
           $categories =  Category::all();
           foreach ($categories as $category) {
               $category->posts = Post::where(['category_id'=>$category->id])->count();
           }
           $view->with(compact('categories'));
       });
    }
}
