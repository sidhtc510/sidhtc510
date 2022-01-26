<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191); /*для успешного выполнения миграций */

        /**
         *   отобразит на страницу все sql запросы
         *
         */
        // DB::listen(function ($query) {
        //     dump($query->sql, $query->bindings);
        // });

        // DB::listen(function ($query) {
        //     dump($query->sql);
        //     Log::channel('mysqllogs')->info($query->sql);
        //     Log::info($query->sql);
        // });

        view()->composer('frontEndViews.categoriesMenu', function ($view) {
            /****
             * дерево категорий
             */
            $categories = Category::whereNull('category_id')
                ->with('childrenCategories')
                ->get();
            $view->with('categories', $categories);
        });




        view()->composer('frontEndViews.sideBar', function ($view) {
            /***
             * 
             * Вывод списка категорий в сайдбар
             * 
             */
            if (Cache::has('sidebar_categories')) {
                $sidebar_categories = Cache::get('sidebar_categories');
            } else {
                $sidebar_categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->get(); //при использовании метода withCount создается свойство posts_count (во вьюхе, через foreach, для вывода использую $sidebar_category->posts_count)
                Cache::put('sidebar_categories', $sidebar_categories, 86400); // ложу категории в кеш на сутки  (86400 секунд)
            }
            $view->with('sidebar_categories', $sidebar_categories);

            // $view->with('sidebar_categories', Category::withCount('posts')->get()); //при использовании метода withCount создается свойство posts_count (во вьюхе, через foreach, для вывода использую $sidebar_category->posts_count);


            /***
             * 
             * Вывод популярных постов в сайдбар
             * 
             */
            if (Cache::has('popular_posts')) {
                $popular_posts = Cache::get('popular_posts');
            } else {
                $popular_posts = Post::orderBy('views', 'desc')->limit(4)->get();
                Cache::put('popular_posts', $popular_posts, 300);  // ложу посты в кеш на 5 минут  (300 секунд)
            }

            $view->with('popular_posts', $popular_posts);




            /***
             * 
             * Вывод тегов в сайдбар
             * 
             */
            if (Cache::has('sideBar_tags')) {
                $sideBar_tags = Cache::get('sideBar_tags');
            } else {
                $sideBar_tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->limit(10)->get();
                Cache::put('sideBar_tags', $sideBar_tags, 86400); // ложу теги в кеш на сутки  (86400 секунд)
            }

            $view->with('sideBar_tags', $sideBar_tags);

            // Cache::flush();


        });
    }
}
